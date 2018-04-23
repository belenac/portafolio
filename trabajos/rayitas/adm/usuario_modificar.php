<?php require_once("../conexion.php");

if(isset($_POST[enviar]) && $_POST[enviar]=="enviar") {
$qc="UPDATE `registros` SET `nombre`='$_POST[nombre]', `correo`='$_POST[correo]', `telefono`='$_POST[telefono]', `pais`='$_POST[pais]', `direccion`='$_POST[direccion]', `usuario`='$_POST[usuario]', `contrasenia`='$_POST[contrasenia]', `tipo`='$_POST[tipo]' WHERE `registros`.`id`='$_GET[id]'";

if($conn -> query($qc)) header("Location: usuarios.php");
};

//compras
$qc="SELECT * FROM `registros` WHERE `id` = '$_GET[id]' ";
$rsc= $conn -> query($qc);
$rc = $rsc -> fetch_assoc();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Usuarios</title>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
<?php require("../header.php");?>
<?php include("menu.php");?>
<br>
<div class="contenedor usuarios-modificar">
    <h3>Usuarios</h3>
    <form method="post" name="formulario" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $rc[nombre]?>" required>
        <label for="email">Email:</label>
        <input type="email" name="correo" id="correo" value="<?php echo $rc[correo]?>" required>
        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" id="telefono" value="<?php echo $rc[telefono]?>" required>
        <label for="pais">País:</label>
        <select  name="pais" id="pais" required>
            <option value="Argentina" <? if($rc[pais=="Argentina"]) {echo 'selected';}?>>Argentina</option>
            <option value="Bolivia" <? if($rc[pais=="Bolivia"]) {echo 'selected';}?>>Bolivia</option>
            <option value="Brasil" <? if($rc[pais=="Brasil"]) {echo 'selected';}?>>Brasil</option>
            <option value="Chile" <? if($rc[pais=='Chile']) {echo 'selected';}?>>Chile</option>
            <option value="Colombia" <? if($rc[pais=="Colombia"]) {echo 'selected';}?>>Colombia</option>
        </select>
        <br>
        <label for="direccion" class="mover">Direncción:</label>
        <br>
        <textarea name="direccion" id="direccion" required><?php echo $rc[direccion]?></textarea>
        <br>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" value="<?php echo $rc[usuario]?>" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia" value="<?php echo $rc[contrasenia]?>" required>
        <label for="tipo">Nivel de usuario:</label>
        <input type="number" name="tipo" id="tipo" value="<?php echo $rc[tipo]?>" required>
        <input type="submit" name="enviar" value="enviar" class="enviar">
    </form>
</div>
<br>
<br>
<?php include("../footer.php");?>
</body>
</html>