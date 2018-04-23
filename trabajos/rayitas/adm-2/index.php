<?php require_once ("../conexion.php");?>
<?php 
if(isset($_GET[idElm]) && $_GET[idElm]<>""){
	$q="DELETE FROM `registros` WHERE `id` = '$_GET[idElm]'";
	$conn -> query($q);
	} ?>
<?php 
$max=5;
$page=0;
$self = $_SERVER['PHP_SELF'];
if(isset($_GET[page]) && $_GET[page]<>""){
	$page=$_GET[page];
	}
$inicio=$page * $max;

$query="SELECT * FROM `registros`";
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
<html>
<head>
    <meta charset="UTF-8">
    <title>Tienda virtual Rayitas S.A.</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
<?php require("header.php");?>
<?php include("nav.php");?>
<?php if($total){ ?>
<br>
<!--<div class="filtro">
<form action=" " method="post">

	<input type="text" name="buscador">
	<input type="submit" value="Buscar">
</form>
</div>-->
<h2>Usuarios</h2>
<br>
<a href="registro.php" class="agregar">Agregar</a>
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
<table width="90%">
  <tbody>
    <tr>
        <th width="30%">Nombre</th>
        <th width="25%">Correo</th>
        <th width="5%">País</th>
        <th width="5%"></th>
        <th width="5%"></th>
        <th width="5%"></th>
    </tr>
    
    <?php while($row= $resource -> fetch_assoc()){ ?>
    <tr class="ficha-productos">
        <td><a href="ficha-usuario.php?id=<?php echo $row[id]?>"><?php echo $row[nombre]?></a></td>
        <td><?php echo $row[correo]?></td>
        <td class="centro"><?php echo $row[pais]?></td>
        <td class="centro"><a href="ficha-usuario.php?id=<?php echo $row[id]?>"><img src="../images/mostrar.svg" alt="" width="20px"></a></td>
        <td class="centro"><a href="modificar-usuario.php?id=<?php echo $row[id]?>"><img src="../images/editar.png" alt="" width="20px"></a></td>
        <td class="centro"><a href="index.php?idElm=<?php echo $row[id]?>" onClick="return confirm('Esta seguro que desea eliminar este usuario?')"><img width="20px" src="../images/eliminar.jpg" alt=""></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } else { ?>
<p class="error">No hay resultado para su consulta.</p>
<?php }?>
<?php include("footer.php");?>
</body>
</html>