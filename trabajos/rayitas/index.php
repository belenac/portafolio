<?php require_once ("conexion.php");?>
<?php
$q = "select * from productos;";
?>
<?php 
$max=6;
$page=0;
$self = $_SERVER['PHP_SELF'];
if(isset($_GET[page]) && $_GET[page]<>""){
	$page=$_GET[page];
	}
$inicio=$page * $max;

$query="SELECT * FROM `productos` WHERE 1 ORDER BY fecha DESC";
$query_limit=$query." LIMIT $inicio,$max";
$resource = $conn -> query($query_limit);

if(isset($_GET[total]) && $_GET[total] <> ""){
	$total = $_GET[total];
} else {
	$todos = $conn -> query($query);
	$total = $todos -> num_rows;
}
$totalPages = ceil($total/$max)-1;
//print_r($resource);
?>

<?php $q_b="SELECT * FROM `productos` WHERE 1 AND (`nombre` LIKE '%$_POST[buscador]%' OR `codigo` LIKE '%$_POST[buscador]%'  OR `descripcion` LIKE '%$_POST[buscador]%' OR `colores` LIKE '%$_POST[buscador]%')" ;
   if($_POST[buscador]!=""){
	    $resource= $conn -> query($q_b);
	   } else{
		   $resource = $conn -> query($query_limit);
		   }
 ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda virtual Rayitas S.A.</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
<?php require("header.php");?>
<?php include("menu.php");?>
<?php if($total){ ?>
<div class="contenedor">
<div class="buscador">
<form class="" action="" method="post">
  	<input type="text" name="buscador">
    <input type="submit" value="buscar" class="">
  </form>
</div>
    <br>
    <div class="paginas">
		<?php if($page - 1 >= 0) {?>
        <br>
        <a href="<?php echo $self?>?page=<?php echo $page - 1 ?>">anterios</a><?php }?>
        | <?php echo $inicio +1?> a <?php echo min($inicio + $max, $total)?> de <?php echo $total?> |<?php if ($page + 1 <=$totalPages){?>
        <a href="<?php echo $self?>?page=<?php echo $page + 1 ?>">siguiente</a><?php }?>
    </div>
<br>
<table>
	<thead>
        <tr>
            <th width="20%"></th>
            <th width="60%">Producto</th>
            <th width="20%x">Precio</th>
        </tr>
	</thead>
  	<tbody><?php while($row= $resource -> fetch_assoc()){ ?>
    	<tr>
            <td><a href="ficha.php?id=<?php echo $row[id]?>"><img src="images/<?php echo $row[codigo]?>.gif" alt="<?php echo $row[nombre]?>"></td>
            <td><a href="ficha.php?id=<?php echo $row[id]?>"><?php echo $row[nombre]?></a><br><em><?php echo $row[frase_promocional]?></em></td>
            <td>$<?php echo number_format ($row[precio])?></td>
		</tr><?php } ?>
  </tbody>
</table>
<?php } else { ?>
<p class="error">No hay resultado para su consulta.</p>
<?php }?>
<br>
<?php include("footer.php");?>
</div>

</body>
</html>