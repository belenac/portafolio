<?php require_once ("conexion.php"); ?>
<?php
if(!isset($_SESSION))session_start();
if(!$_SESSION[user_id]){
	//echo "<pre>",print_r($_SERVER,1),"</pre>";
	$_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
	header("Location: login.php");	
};

$q="SELECT * FROM `noticias` WHERE `id` = '$_GET[id]' ";
$r=$conn -> query($q);
$t= $r -> num_rows;
$row = $r -> fetch_assoc();
 ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title><?php echo $row[titulo]?> - Tienda virtual Rayitas S.A.</title>
<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
<?php require("header.php");?>
<?php include("menu.php");?>
<div class="contenedor ficha-2">
<div class="img-noticia">
<img src="images/<?php echo $row[id]?>.jpg" alt="<?php echo $row[titulo]?>">
</div>
<div class="info">
<h2><?php echo $row[titulo]?></h2>
<h3><?php echo $row[bajada]?></h3>
<h4><em><?php echo $row[autor]?></em></h4>
<p><?php echo nl2br($row[cuerpo])?></p>
<h5><?php echo $row[categoria]?></h5>
<h6><?php echo $row[fecha]?></h6>
</div>
</div>
<br>
<?php include("footer.php");?>
</body>
</html>