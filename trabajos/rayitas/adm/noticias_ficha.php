<?php require_once ("../conexion.php");
if(!$_GET[id])header("Location: index.php");

$q="SELECT * FROM `noticias` WHERE `id` = '$_GET[id]' ";
$r=$conn -> query($q);
$t= $r -> num_rows;
$row = $r -> fetch_assoc();
 ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>Noticias - Tienda virtual Rayitas S.A.</title>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>

<body>
<?php require("../header.php");?>
<?php include("menu.php");?>
<br>
<h3>Noticias</h3>
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
<td><strong>Título</strong></td>
<td><?php echo $row[titulo]?></td>
</tr>
<tr>
<td><strong>Bajada</strong></td>
<td><?php echo $row[bajada]?></td>
</tr>
<tr>
<td><strong>Autor</strong></td>
<td><?php echo $row[autor]?></td>
</tr>
<tr>
<td><strong>Cuerpo</strong></td>
<td><?php echo $row[cuerpo]?></td>
</tr>
<tr>
<td><strong>Categoria</strong></td>
<td><?php echo $row[categoria]?></td>
</tr>
<tr>
<td><strong>Fecha</strong></td>
<td><?php echo $row[fecha]?></td>
</tr>
</tbody>
</table>
<br>
<a href="index.php?idElm=<?php echo $row[id]?>" onClick="return confirm('¿Esta seguro que desea eliminar este usuario?')">Eliminar</a>
<a href="noticias_modificar.php?id=<?php echo $row[id]?>">Modificar</a>
</div>
<br>
<?php include("../footer.php");?>
</body>
</html>