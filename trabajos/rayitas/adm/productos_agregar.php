<?php require_once("../conexion.php");

if(isset($_POST[enviar]) && $_POST[enviar]=="enviar") {
	$q="INSERT INTO `productos` (`id`, `nombre`, `codigo`, `categoria`, `frase_promocional`, `descripcion`, `colores`, `precio`, `disponibilidad`, `promocion`, `fecha`) VALUES (NULL, '$_POST[nombre]', '$_POST[codigo]', '$_POST[categoria]', '$_POST[frase_promocional]', '$_POST[descripcion]', '$_POST[colores]', '$_POST[precio]', '$_POST[disponibilidad]', '$_POST[promocion]', '$_POST[fecha]')";
	$conn -> query($q);
	$ID = $conn ->insert_id;
	if($ID) header("Location: productos.php");
};
?>

<?php require("../header.php");?>
<?php include("menu.php");?>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
<br>
<div class="contenedor productos-modificar">
    <h3>Registro</h3>
    <form method="post" name="formulario" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="codigo">Codigo:</label>
        <input type="text" name="codigo" id="codigo" required>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" required>
        <label for="frase_promocional" class="mover">Frase promocional:</label>
        <br>
        <textarea name="frase_promocional" id="frase_promocional" required></textarea>
        <br>
        <label for="descripcion" class="mover">Descripción:</label>
        <br>
        <textarea name="descripcion" id="descripcion" required></textarea>
        <br>
        <label for="colores">Color:</label>
        <input type="text" name="colores" id="colores" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required>
        <label for="disponibilidad">Disponibilidad:</label>
        <input type="number" name="disponibilidad" id="disponibilidad">
        <label for="promocion">Promoción:</label>
        <input type="number" name="promocion" id="promocion">
        <label for="fecha">Fecha:</label>
        <input type="datetime-local" name="fecha" id="fecha" required>
        <input type="submit" name="enviar" value="enviar" class="enviar">
    </form>
</div>
<br>
<br>
<?php include("../footer.php");?>