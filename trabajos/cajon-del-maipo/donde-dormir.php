<?php

$title="¿Dónde dormir? | Cajón del Maipo" ;
include "include/header.php" ; 

$q = "select * from dormir;";

$max=6;
$page=0;
$self = $_SERVER['PHP_SELF'];
if(isset($_GET[page]) && $_GET[page]<>""){
	$page=$_GET[page];
	}
$inicio=$page * $max;

$query="SELECT * FROM `dormir` WHERE 1 ORDER BY tipo DESC";
$query_limit=$query." LIMIT $inicio,$max";
$resource = $conn -> query($query_limit);

if(isset($_GET[total]) && $_GET[total] <> ""){
	$total = $_GET[total];
} else {
	$todos = $conn -> query($query);
	$total = $todos -> num_rows;
}
$totalPages = ceil($total/$max)-1;
//print_r($resource);

$q_b="SELECT * FROM `dormir` WHERE 1 AND (`nombre` LIKE '%$_POST[buscador]%' OR `descripcion` LIKE '%$_POST[buscador]%')" ;
   if($_POST[buscador]!=""){
	    $resource= $conn -> query($q_b);
	   } else{
		   $resource = $conn -> query($query_limit);
		   }

?>
<div class="seccion bg-donde-dormir">
	<div class="container">
		<h1>¿Dónde Dormir?</h1>
		<div class="paginacion">
			<?php if($page - 1 >= 0) {?>
			<a href="<?php echo $self?>?page=<?php echo $page - 1 ?>">anterios</a>
			<?php }?> |
			<?php echo $inicio +1?> a
			<?php echo min($inicio + $max, $total)?> de
			<?php echo $total?> |
			<?php if ($page + 1 <=$totalPages){?> <a href="<?php echo $self?>?page=<?php echo $page + 1 ?>">siguiente</a>
			<?php }?>
		</div>
		<table>
			<thead>
				<tr>
					<th width="15%">Nombre</th>
					<th width="20%" class="none-840">Descripción</th>
					<th width="15%" class="none-840">Dirección</th>
					<th width="15">Telefono</th>
					<th width="15">Sitio web</th>
					<th width="15" class="none-840">Forma de Pago</th>
					<th width="5%" class="none-840">Tipo</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row= $resource -> fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row[nombre]?></td>
					<td class="none-840"><?php echo $row[descripcion]?></td>
					<td class="none-840"><?php echo $row[direccion]?></td>
					<td><?php echo $row[telefono]?></td>
					<td><a href="<?php echo $row[sitio_web]?>"><?php echo $row[sitio_web]?></a></td>
					<td class="none-840"><?php echo $row[forma_de_pago]?></td>
					<td class="none-840"><?php echo $row[tipo]?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div><!--/.container-->
</div><!--/.destacados-->
<?php include "include/footer.php" ; ?>