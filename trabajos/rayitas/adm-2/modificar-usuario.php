<?php require_once("../conexion.php");

if(isset($_POST[enviar]) && $_POST[enviar]=="enviar") {
$qc="UPDATE `registros` SET `nombre`='$_POST[nombre]', `correo`='$_POST[correo]', `telefono`='$_POST[telefono]', `pais`='$_POST[pais]', `direccion`='$_POST[direccion]', `usuario`='$_POST[usuario]', `contrasenia`='$_POST[contrasenia]' WHERE `registros`.`id`='$_GET[id]'";

if($conn -> query($qc)) header("Location: index.php");
};

//compras
$qc="SELECT * FROM `registros` WHERE `id` = '$_GET[id]' ";
$rsc= $conn -> query($qc);
$rc = $rsc -> fetch_assoc();
?>

<?php require("header.php");?>
<?php include("nav.php");?>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
<br>
<div class="formulario">
    <h3>Registro</h3>
    <form method="post" name="formulario" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $rc[nombre]?>" required>
        <label for="email">Email:</label>
        <input type="email" name="correo" id="correo" value="<?php echo $rc[correo]?>" required>
        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" id="telefono" value="<?php echo $rc[telefono]?>" required>
        <label for="pais">País:</label>
        <select  type="text" name="pais" id="pais" value="<?php echo $rc[pais]?>" required>
            <option>Argentina</option>
            <option>Bolivia</option>
            <option>Brasil</option>
            <option selected>Chile</option>
            <option>Colombia</option>
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
        <input type="submit" name="enviar" value="enviar" class="enviar">
    </form>
</div>
<br>
<br>
<?php include("footer.php");?>