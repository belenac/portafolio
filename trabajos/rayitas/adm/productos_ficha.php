<?php require_once ("../conexion.php");
if(!$_GET[id])header("Location: index.php");

$q="SELECT * FROM `productos` WHERE `id` = '$_GET[id]' ";
$r=$conn -> query($q);
$t= $r -> num_rows;
$row = $r -> fetch_assoc();
 ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>Productos - Tienda virtual Rayitas S.A.</title>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>

<body>
<?php require("../header.php");?>
<?php include("menu.php");?>
<br>
<h3>Productos</h3>
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
<td><strong>Nombre del producto</strong></td>
<td><?php echo $row[nombre]?></td>
</tr>
<tr>
<td><strong>Código del producto</strong></td>
<td><?php echo $row[codigo]?></td>
</tr>
<tr>
<td><strong>Categoria</strong></td>
<td><?php echo $row[categoria]?></td>
</tr>
<tr>
<td><strong>Frase promocional</strong></td>
<td><?php echo $row[frase_promocional]?></td>
</tr>
<tr>
<td><strong>Descripción</strong></td>
<td><?php echo $row[descripcion]?></td>
</tr>
<tr>
<td><strong>Color</strong></td>
<td><?php echo $row[colores]?></td>
</tr>
<tr>
<td><strong>Precio</strong></td>
<td>$<?php echo number_format ($row[precio])?></td>
</tr>
<tr>
<td><strong>Disponibilidad</strong></td>
<td><?php echo $row[disponibilidad]?></td>
</tr>
<tr>
<td><strong>Promoción</strong></td>
<td><?php echo $row[promocion]?></td>
</tr>
<tr>
<td><strong>Fecha</strong></td>
<td><?php echo $row[fecha]?></td>
</tr>
</tbody>
</table>
<br>
<a href="index.php?idElm=<?php echo $row[id]?>" onClick="return confirm('¿Esta seguro que desea eliminar este usuario?')">Eliminar</a>
<a href="productos_modificar.php?id=<?php echo $row[id]?>">Modificar</a>
</div>
<br>
<?php include("../footer.php");?>
</body>
</html>