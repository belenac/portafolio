<?php require_once ("../conexion.php");
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
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>

<body>
<?php require("../header.php");?>
<?php include("menu.php");?>
<br>
<h3>Usuarios</h3>
<br>
<div class="contenedor">
<table>
<thead>
<tr>
<th width="30%"></th>
<th width="70%"></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Nombre</strong></td>
<td><?php echo $row[nombre]?></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td><?php echo $row[correo]?></td>
</tr>
<tr>
<td><strong>Teléfono</strong></td>
<td><?php echo $row[telefono]?></td>
</tr>
<tr>
<td><strong>País</strong></td>
<td><?php echo $row[pais]?></td>
</tr>
<tr>
<td><strong>Dirección</strong></td>
<td><?php echo $row[direccion]?></td>
</tr>
<tr>
<td><strong>Usuario</strong></td>
<td><?php echo $row[usuario]?></td>
</tr>
<tr>
<td><strong>Clave</strong></td>
<td><?php echo $row[contrasenia]?></td>
</tr>
<tr>
<td><strong>Nivel de usurio:</strong></td>
<td><?php echo $row[tipo]?></td>
</tr>
</tbody>
</table>
<br>
<a href="index.php?idElm=<?php echo $row[id]?>" onClick="return confirm('¿Esta seguro que desea eliminar este usuario?')">Eliminar</a>
<a href="usuario_modificar.php?id=<?php echo $row[id]?>">Modificar</a>
</div>
<br>
<?php include("../footer.php");?>
</body>
</html>