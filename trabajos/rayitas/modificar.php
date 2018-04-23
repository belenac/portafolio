<?php require_once("conexion.php");

if(isset($_POST[comprar]) && $_POST[comprar]=="comprar"){
	$q="UPDATE compras SET cantidad=$_POST[cantidad] WHERE id=$_POST[id]";
	if($conn -> query($q)) header("Location: boleta.php");
}

$q="SELECT * FROM `productos` WHERE `codigo` = '$_GET[codigo]'";
$r=$conn -> query($q);
$row = $r -> fetch_assoc(); 
//compras
$q_compra="SELECT * FROM `compras` WHERE `id` = '$_GET[id]'";
$r_compra=$conn -> query($q_compra);
$row_compra = $r_compra -> fetch_assoc();
 ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $row[nombre]?> - Tienda virtual Rayitas S.A.</title>
<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
<?php require("header.php");?>
<?php include("menu.php");?>
<div class="contenedor ficha">
<div class="imagen">
<img src="images/<?php echo $row[codigo]?>.gif" alt="<?php echo $row[nombre]?>">
</div>
<div class="info">
<h2>	<?php echo $row[nombre]?><small></h2>
<h3><em>Código: <?php echo $row[codigo]?></em></small></h3>
<h4><?php echo $row[frase_promocional]?></h4>
<p><em>Color: <?php echo $row[colores]?></em></p>
<p><?php echo nl2br($row[descripcion])?></p>
</div>
<div class="info-2">
<p>Fecha: <?php echo fechita($row[fecha]);?></p>
<p>Categoría: <?php echo $row[categoria]?></p>
</div>
<div class="compra">
<p><strong>Pecio $<?php echo number_format ($row[precio])?></strong></p>
<form method="post">
<input type="hidden" name="id" value="<?php echo $row_compra[id]?>">
<input type="number" class="cantidad" required="required" value="<?php echo $row_compra[cantidad]?>" min="1" name="cantidad">
<input type="submit" name="comprar" value="comprar">
</form>
</div>
</div>
<br>
<?php include("footer.php");?>
</body>
</html>