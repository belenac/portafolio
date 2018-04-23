<?php require_once ("conexion.php");
if(!$_GET[id])header("Location: index.php");

$q="SELECT * FROM `registros` WHERE `id` = '$_GET[id]' ";
$r=$conn -> query($q);
$t= $r -> num_rows;
$row = $r -> fetch_assoc();
 ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Usuarios - Tienda virtual Rayitas S.A.</title>
<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
<?php require("header.php");?>
<?php include("nav.php");?>
<br>
<br>
<h3>Usuarios</h3>
<br>
<br>
<div class="ficha-usuario">

	<div>
    	<p><strong>Nombre </strong><?php echo $row[nombre]?></p><br>
        <p><strong>Email </strong><?php echo $row[correo]?></p><br>
        <p><strong>Teléfono </strong><?php echo $row[telefono]?></p><br>
        <p><strong>País </strong><?php echo $row[pais]?></p><br>
        <p><strong>Dirección </strong><?php echo $row[direccion]?></p><br><br>
        <p><strong>Usuario </strong><?php echo $row[usuario]?></p><br>
        <p><strong>Clave </strong><?php echo $row[contrasenia]?></p><br>
    </div>
    <a class="eliminar" href="index.php?idElm=<?php echo $row[id]?>" onClick="return confirm('Esta seguro que desea eliminar este usuario?')">Eliminar</a>
    <a class="modificar" href="modificar-usuario.php?id=<?php echo $row[id]?>">Modificar</a>
</div>
<br><br>
<?php include("footer.php");?>
</body>
</html>