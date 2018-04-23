<?php require_once ("conexion.php"); ?>
<?php 
if(!isset($_SESSION)) session_start(); //arranca session si no ha comenzado
if((isset($_POST[usuario]) && $_POST[usuario]<>"")&&(isset($_POST[contrasenia]) && $_POST[contrasenia]<>"")){//existe y no viene vacio el usuario
	$query="SELECT * FROM `registros` WHERE 1 AND usuario='$_POST[usuario]' AND contrasenia='$_POST[contrasenia]'";
	$resource=$conn -> query($query);
	if($t=$resource->num_rows){
		$row=$resource->fetch_assoc();
		$_SESSION[user_id]=$row[id];
		$_SESSION[nombre]=$row[nombre];
		$_SESSION[correo]=$row[correo];
		$_SESSION[telefono]=$row[telefono];
		$_SESSION[pais]=$row[pais];
		$_SESSION[direccion]=$row[direccion];
		$_SESSION[usuario]=$row[usuario];
		$_SESSION[contrasenia]=$row[contrasenia];
		$_SESSION[tipo]=$row[tipo];
	
		$volver=($_SESSION[volver])?$_SESSION[volver]:"index.php"; 
		header("Location: ".$volver);
		}else{
			$error="Usuario/Contraseña no registrado";
		}
		

if($_SESSION[tipo]==5){
		header("Location: adm/index.php");	
	}else{
	   	header("Location: index.php");		
	}
}
 ?>
<?php require("header.php");?>
<?php include("menu.php");?>
<link rel="stylesheet" href="css/estilos.css" type="text/css">
<br>
<div class="inicio">
    <h2>Identificación de usuario</h2>
    <form method="post" name="formulario" action="" onsubmit=" ">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" value="<?php echo $row[uaurio]?>" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia" value="<?php echo $row[contrasenia]?>" required>
        <input type="submit" value="enviar" class="enviar" name="enviar" id="enviar">
    </form>
</div>
<br>
<?php include("footer.php");?>