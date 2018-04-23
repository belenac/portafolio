<?php require_once("../conexion.php");

if(isset($_POST[enviar]) && $_POST[enviar]=="enviar") {
$qc="UPDATE `productos` SET `nombre`='$_POST[nombre]', `codigo`='$_POST[codigo]', `categoria`='$_POST[categoria]', `frase_promocional`='$_POST[frase_promocional]', `descripcion`='$_POST[descripcion]', `colores`='$_POST[colores]', `precio`='$_POST[precio]', `disponibilidad`='$_POST[disponibilidad]', `promocion`='$_POST[promocion]', `fecha`='$_POST[fecha]' WHERE `productos`.`id`='$_GET[id]'";

if($conn -> query($qc)) header("Location: productos.php");
};

//compras
$qc="SELECT * FROM `productos` WHERE `id` = '$_GET[id]' ";
$rsc= $conn -> query($qc);
$rc = $rsc -> fetch_assoc();
?>

<?php require("../header.php");?>
<?php include("menu.php");?>
<link rel="stylesheet" href="../css/estilos.css" type="text/css">
<br>
<div class="contenedor productos-modificar">
    <h3>Registro</h3>
    <form method="post" name="formulario" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $rc[nombre]?>" required>
        <label for="codigo">Codigo:</label>
        <input type="text" name="codigo" id="codigo" value="<?php echo $rc[codigo]?>" required>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" value="<?php echo $rc[categoria]?>" required>
        <label for="frase_promocional" class="mover">Frase promocional:</label>
        <br>
        <textarea name="frase_promocional" id="frase_promocional" required><?php echo $rc[frase_promocional]?></textarea>
        <br>
        <label for="descripcion" class="mover">Descripción:</label>
        <br>
        <textarea name="descripcion" id="descripcion" required><?php echo $rc[descripcion]?></textarea>
        <br>
        <label for="colores">Color:</label>
        <input type="text" name="colores" id="colores" value="<?php echo $rc[colores]?>" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="<?php echo $rc[precio]?>" required>
        <label for="disponibilidad">Disponibilidad:</label>
        <input type="number" name="disponibilidad" id="disponibilidad" value="<?php echo $rc[disponibilidad]?>">
        <label for="promocion">Promoción:</label>
        <input type="number" value="<?php echo $rc[promocion]?>" name="promocion" id="promocion">
        <label for="fecha">Fecha:</label>
        <input type="datetime-local" name="fecha" id="fecha" value="<?php echo $rc[fecha]?>" required>
        <input type="submit" name="enviar" value="enviar" class="enviar">
    </form>
</div>
<br>
<br>
<?php include("../footer.php");?>