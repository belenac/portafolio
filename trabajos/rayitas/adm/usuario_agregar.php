<?php require_once ("../conexion.php");

if(isset($_POST[enviar]) && $_POST[enviar]=="enviar") {
	$q="INSERT INTO `registros` (`id`, `nombre`, `correo`, `telefono`, `pais`, `direccion`, `usuario`, `contrasenia`) VALUES (NULL, '$_POST[nombre]', '$_POST[correo]', '$_POST[telefono]', '$_POST[pais]', '$_POST[direccion]', '$_POST[usuario]', '$_POST[contrasenia]')";
	$conn -> query($q);
	$ID = $conn -> insert_id;
	if($ID) header("Location: usuarios.php");
};
?>

<?php require("../header.php");?>
<?php include("menu.php");?>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
<div class="registro">
    <h2>Formulario de Registro</h2>
    <form method="post" name="formulario" action="">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="" required><br>
        <label for="email">Email:</label><br>
        <input type="email" name="correo" id="correo" value="" required><br>
        <label for="telefono">Teléfono:</label><br>
        <input type="tel" name="telefono" id="telefono" value="" required><br>
        <label for="pais">País:</label><br>
        <select  type="text" name="pais" id="pais" required>
            <option value="Argentina">Argentina</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Brasil">Brasil</option>
            <option value="Chile" selected>Chile</option>
            <option value="Colombia">Colombia</option>
        </select>
        <br><br>
        <label for="direccion" class="mover">Direccion:</label><br>
        <textarea name="direccion" id="direccion" value="" required></textarea><br>
        <label for="usuario">Usuario:</label><br>
        <input type="text" name="usuario" id="usuario" value="" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" name="contrasenia" id="contrasenia" value="" required><br>
        <input type="submit" value="enviar" class="enviar" name="enviar" id="enviar">
    </form>
</div>

<?php include("../footer.php");?>