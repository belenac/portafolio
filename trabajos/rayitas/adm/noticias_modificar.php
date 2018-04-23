<?php require_once("../conexion.php");

if(isset($_POST[enviar]) && $_POST[enviar]=="enviar") {
$qc="UPDATE `noticias` SET `titulo`='$_POST[titulo]', `bajada`='$_POST[bajada]', `categoria`='$_POST[categoria]', `cuerpo`='$_POST[cuerpo]', `autor`='$_POST[autor]', `fecha`='$_POST[fecha]' WHERE `noticias`.`id`='$_GET[id]'";

if($conn -> query($qc)) header("Location: noticias.php");
};

//compras
$qc="SELECT * FROM `noticias` WHERE `id` = '$_GET[id]' ";
$rsc= $conn -> query($qc);
$rc = $rsc -> fetch_assoc();
?>

<?php require("../header.php");?>
<?php include("menu.php");?>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
<br>
<div class="contenedor productos-modificar">
    <h3>Noticias</h3>
    <form method="post" name="formulario" action="">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $rc[titulo]?>" required>
        <label for="bajada">Bajada:</label>
        <input type="text" name="bajada" id="bajada" value="<?php echo $rc[bajada]?>" required>
        <label for="cuerpo">Cuerpo de la noticia:</label>
        <br>
        <textarea name="cuerpo" id="cuerpo" required><?php echo $rc[cuerpo]?></textarea>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?php echo $rc[autor]?>" required>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria"  value="<?php echo $rc[categoria]?>" required>
        <label for="fecha">Fecha:</label>
        <input type="datetime-local" name="fecha" id="fecha" value="<?php echo $rc[fecha]?>" required>
        <input type="submit" name="enviar" value="enviar" class="enviar">
    </form>
</div>
<br>
<br>
<?php include("../footer.php");?>