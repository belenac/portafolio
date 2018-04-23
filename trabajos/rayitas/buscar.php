<form action="" method="post" id="cdr">
<input type="text" name="busca">
<input type="submit" name="submit" placeholder="Buscar">
</form>

<?php 
$busca="";
$busca=$_POST['busca'];
mysql_connect("localhost", "erika_eavalos", "marmalade12");
mysql_select_db("erika_rayitas");
if($busca!=""){
	$busqueda="SELECT * FROM productos where nombre like '%".$busca."%'";
	 while($mostrar=$busqueda){?>
<tr>
<td><a href="ficha.php?id=<?php echo $row[id]?>"><img src="images/<?php echo $row[codigo]?>.gif" alt="<?php echo $row[nombre]?>"></td>
<td><a href="ficha.php?id=<?php echo $row[id]?>"><?php echo $row[nombre]?></a><br><em><?php echo $row[frase_promocional]?></em></td>
<td>$<?php echo number_format ($row[precio])?></td>
</tr>
<?php }?>
<?php }?>