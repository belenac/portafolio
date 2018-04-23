<?php require_once ("conexion.php");?>
<?php 
//echo "<pre>".print_r($_POST,1)."</pre>";
if(isset($_POST[nombre]) && $_POST[nombre]){
	$destinatario="eri.avalos@alumnos.duoc.cl";
	$asunto="Contacto desde la página web";
	$cuerpo="El Cliente".$_POST[nombre]." <".$_POST[email]."> ha escrito en la página web:
	Asunto: ".$_POST[asunto]."
	".$_POST[mensaje]."
	pase buen día.
	";
	$cabecera="From: <eac1992@gmail.com>";
	
	if(mail($destinatario,$asunto,$cuerpo,$cabecera)){
		$ok="Correo enviado";
		}else{
			$error="error al enviar el correo";
	
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contacto</title>
<link href="css/estilos.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php require("header.php");?>
<?php include("menu.php");?>
<br>
<div class="contenedor contacto">
<h2>Contacto</h2>
<form method="post" name="contacto" action="" onSubmit="">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="asunto">Asunto:</label><br>
        <input type="text" name="asunto" id="asunto" required><br>
        <label for="mensaje">Mensaje:</label>
        <br>
        <textarea name="mensaje" id="mensaje" required></textarea>
        <br><br>
        <input type="submit" value="enviar" class="enviar" name="enviar" id="enviar">
    </form>
</div>
<br>
<?php include("footer.php");?>
</body>
</html>