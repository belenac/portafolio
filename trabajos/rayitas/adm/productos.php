<?php require_once ("../conexion.php");?>

<?php 
if(isset($_GET[idElm]) && $_GET[idElm]<>""){
	$q="DELETE FROM `productos` WHERE `id` = '$_GET[idElm]'";
	$conn -> query($q);
	} ?>
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
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Tienda virtual Rayitas S.A.</title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>

<body>
<?php require("../header.php");?>
<?php include("menu.php");?>

<div class="contenedor">
<h2>Productos</h2>
<a href="productos_agregar.php" class="agregar">Agregar Productos</a>
<?php if($total){ ?>
<br>
<div class="paginacion">
<br>
<?php if($page - 1 >= 0) {?>
<br>
<a href="<?php echo $self?>?page=<?php echo $page - 1 ?>">anterios</a>
<?php }?>
| <?php echo $inicio +1?> a <?php echo min($inicio + $max, $total)?> de <?php echo $total?> |
<?php if ($page + 1 <=$totalPages){?>
<a href="<?php echo $self?>?page=<?php echo $page + 1 ?>">siguiente</a>
<?php }?>
</div>
<br>
<table class="productos">
 <thead>
    <tr>
        <th width="30%">Nombre</th>
        <th width="25%">Categoria</th>
        <th width="5%">Precio</th>
        <th width="5%"></th>
        <th width="5%"></th>
        <th width="5%"></th>
    </tr>
 </thead>
 <tbody>
    <?php while($row= $resource -> fetch_assoc()){ ?>
    <tr>
        <td><a href="productos_ficha.php?id=<?php echo $row[id]?>"><?php echo $row[nombre]?></a></td>
        <td><?php echo $row[categoria]?></td>
        <td>$<?php echo number_format ($row[precio])?></td>
        <td><a href="productos_ficha.php?id=<?php echo $row[id]?>"><img src="../images/mostrar.svg" alt="" width="20px"></a></td>
        <td><a href="productos_modificar.php?id=<?php echo $row[id]?>"><img src="../images/editar.png" alt="" width="20px"></a></td>
        <td><a href="index.php?idElm=<?php echo $row[id]?>" onClick="return confirm('Esta seguro que desea eliminar este usuario?')"><img width="20px" src="../images/eliminar.jpg" alt=""></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } else { ?>
<p class="error">No hay resultado para su consulta.</p>
<br>
</div>
<?php }?>
<br>
<?php include("../footer.php");?>
</body>
</html>