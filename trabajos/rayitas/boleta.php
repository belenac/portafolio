<?php require_once("conexion.php");?>
<?php 
if(!isset($_SESSION))session_start();
if(!$_SESSION[user_id]){//echo "<pre>",print_r($_SERVER,1),"</pre>";
	$_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
	header("Location: login.php");
}; ?>
<?php
if(isset($_GET[idElm]) && $_GET[idElm]<>""){
	$q="DELETE FROM `compras` WHERE `id` = '$_GET[idElm]'";
	$conn -> query($q);
	};
	
$q="SELECT * FROM `compras` WHERE `cliente` = '$_SESSION[user_id]'";
$r= $conn -> query($q);
$t=$r -> num_rows;
//$row = $r -> fetch_assoc();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Boleta - Tienda virtual Rayitas S.A.</title>
<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
<?php require("header.php");?>
<?php include("menu.php");?>
<h2 class="centro">Boleta virtual Rayitas S.A.</h2>
<?php if($t){ ?>

<table class="boleta">
  <tbody>
    <tr>
      <th width="35%">Producto</th>
      <th width="20%">Precio</th>
      <th width="20%">Cantidad</th>
      <th width="15%">Total</th>
      <th width="5%">&nbsp;</th>
      <th width="5%">&nbsp;</th>
    </tr>
	<?php  while($row = $r -> fetch_assoc()){?>    
	<tr>
   		<td><?php echo $row[nombre]?></td>
      	<td>$<?php echo number_format ($precio=$row[precio], 0 , "," , ".")?></td>
      	<td><?php echo number_format ($cantidad=$row[cantidad])?></td>
      	<td>$<?php echo number_format ($subtotal=$precio * $cantidad, 0 , "," , ".") ; $subtotal+=$subtotal;?></td>
      	<td><a href="modificar.php?id=<?php echo $row[id]?>&codigo=<?php echo $row[codigo]?>"><img src="images/editar.png" alt="" width="20px"></a></td>
      	<td><a href="boleta.php?idElm=<?php echo $row[id]?>" onClick="return confirm('¿Está seguro que desea eliminar esta compra?')"><img width="20px" src="images/eliminar.jpg" alt=""></a></td>
    </tr>
	<?php }?>
	<tr>
    	<td>&nbsp;</td>
    	<td>&nbsp;</td>
    	<td class="envio">Envío</td>
   		<td><?php if ($subtotal >= 50000) echo '$'.$envio=0;
	 		else if ($subtotal >= 25000) echo '$'. number_format($envio= 2000);
			else echo '$'. number_format($envio=5000); ?></td>
   		<td>&nbsp;</td>
   		<td>&nbsp;</td>
    </tr>
    <?php if ($subtotal > 50000){?>
   	<tr>
   		<td>&nbsp;</td>
   		<td>&nbsp;</td>
		<td class="descuento">Descuento</td>
    	<td><?php
	  		$descuento=$subtotal * .1;  
	  		echo'- $ '. number_format ($descuento, 0 , "," , ".") ?></td>
    	<td>&nbsp;</td>
    	<td>&nbsp;</td>
	</tr>
	<?php } ?>
	<tr>
    	<td>&nbsp;</td>
    	<td>&nbsp;</td>
    	<td class="sub-total">Subtotal</td>
   		<td><?php if ($subtotal <50000) $subtotal=$envio + $subtotal;
			else if ($subtotal >= 50000) $subtotal= $subtotal - $descuento;
			echo '$'. number_format($subtotal, 0 , "," , ".")?></td>
   		<td>&nbsp;</td>
   		<td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="iva">IVA 19%</td>
      <td><?php $iva=$subtotal * "0.19"; echo '$'. number_format($iva, 0 , "," , ".")?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="total">Total</td>
      <td><?php $total=$subtotal + $iva; echo '$'. number_format($total, 0 , "," , ".")?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<?php } else { ?>
<p>No hay productos en su compra.</p>
<?php }?>
<br>
<?php include("footer.php");?>
</body>
</html>