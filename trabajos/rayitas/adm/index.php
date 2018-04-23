<?php require_once ("../conexion.php");?>
<?php 
if(!isset($_SESSION))session_start();
if(!$_SESSION[user_id]){//echo "<pre>",print_r($_SERVER,1),"</pre>";
	$_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
	header("Location: ../login.php");
}; ?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Adm Rayitas S.A.</title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>

<body>
<?php require("../header.php");?>
<?php include("menu.php");?>
<br>
<div class="contenedor">

<h2>Administrador Tienda Rayitas S.A.</h2>

</div>
<br>
<?php include("../footer.php");?>
</body>
</html>