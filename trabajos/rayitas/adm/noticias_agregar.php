<?php require_once("../conexion.php");

if(isset($_POST[enviar]) && $_POST[enviar]=="enviar") {
	$q="INSERT INTO `noticias`(`id`, `titulo`, `bajada`, `cuerpo`, `fecha`, `autor`, `categoria`) VALUES (NULL, '$_POST[titulo]', '$_POST[bajada]', '$_POST[cuerpo]', '$_POST[fecha]', '$_POST[autor]', '$_POST[categoria]')";
	$conn -> query($q);
	$ID = $conn ->insert_id;
	if($ID) header("Location: noticias.php");
};
?>

<?php require("../header.php");?>
<?php include("menu.php");?>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
<br>
<div class="contenedor productos-modificar">
    <h3>Noticias</h3>
    <form method="post" name="formulario" action="">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        <label for="bajada">Bajada:</label>
        <input type="text" name="bajada" id="bajada" required>
        <label for="cuerpo">Cuerpo de la noticia:</label>
        <br>
        <textarea name="cuerpo" id="cuerpo" required></textarea>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" required>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" required>
        <label for="fecha">Fecha:</label>
        <input type="datetime-local" name="fecha" id="fecha" required>
        <input type="submit" name="enviar" value="enviar" class="enviar">
    </form>
</div>
<br>
<br>
<?php include("../footer.php");?>