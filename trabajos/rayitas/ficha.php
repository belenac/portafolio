<?php require_once ("conexion.php"); ?>
<?php
if(!isset($_SESSION))session_start();
if(!$_SESSION[user_id]){
	//echo "<pre>",print_r($_SERVER,1),"</pre>";
	$_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
	header("Location: login.php");	
};

if(isset($_POST[comprar]) && $_POST[comprar]=="comprar"){
	$q="INSERT INTO `compras` (`id`, `cliente`, `codigo`, `nombre`, `cantidad`, `precio`, `fecha`) VALUES (NULL, '$_POST[cliente]', '$_POST[codigo]', '$_POST[nombre]',   '$_POST[cantidad]', '$_POST[precio]',  NOW())";
	$conn -> query($q);
	$ID = $conn -> insert_id;
	if($ID) header("Location: boleta.php");
};

$q="SELECT * FROM `productos` WHERE `id` = '$_GET[id]' ";
$r=$conn -> query($q);
$t= $r -> num_rows;
$row = $r -> fetch_assoc();
 ?>
<!doctype html>
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
<h2><?php echo $row[nombre]?></h2>
<h3><small><em>Código: <?php echo $row[codigo]?></em></small></h3>
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
<input type="hidden" name="nombre" value="<?php echo $row[nombre]?>">
<input type="hidden" name="codigo" value="<?php echo $row[codigo]?>">
<input type="hidden" name="precio" value="<?php echo $row[precio]?>">
<input type="hidden" name="cliente" value="<?php echo $_SESSION[user_id]?>">
<input type="number" class="cantidad" required="required" value="1" min="1" name="cantidad">
<input type="submit" name="comprar" value="comprar">
</form>
</div>
</div>
<br>
<?php include("footer.php");?>
</body>
</html>