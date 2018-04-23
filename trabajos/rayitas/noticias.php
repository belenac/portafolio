<?php require_once ("conexion.php");?>
<?php
if(!isset($_SESSION))session_start();
if(!$_SESSION[user_id]){
	//echo "<pre>",print_r($_SERVER,1),"</pre>";
	$_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
	header("Location: login.php");	
};

$q = "select * from noticias;";
?>
<?php 
$max=6;
$page=0;
$self = $_SERVER['PHP_SELF'];
if(isset($_GET[page]) && $_GET[page]<>""){
	$page=$_GET[page];
	}
$inicio=$page * $max;

$query="SELECT * FROM `noticias` WHERE 1 ORDER BY fecha DESC";
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
?>

<?php $q_b="SELECT * FROM `noticias` WHERE 1 AND (`titulo` LIKE '%$_POST[buscador]%' OR `bajada` LIKE '%$_POST[buscador]%'  OR `cuerpo` LIKE '%$_POST[buscador]%' OR `categoria` LIKE '%$_POST[buscador]%')" ;
   if($_POST[buscador]!=""){
	    $resource= $conn -> query($q_b);
	   } else{
		   $resource = $conn -> query($query_limit);
		   }
 ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Noticias - Tienda virtual Rayitas S.A.</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
<?php require("header.php");?>
<?php include("menu.php");?>
<?php if($total){ ?>
<div class="contenedor">
<div class="buscador">
<form class="" action="" method="post">
  	<input type="text" name="buscador">
    <input type="submit" value="buscar" class="">
  </form>
</div>
    <br>
    <div class="paginas">
		<?php if($page - 1 >= 0) {?>
        <br>
        <a href="<?php echo $self?>?page=<?php echo $page - 1 ?>">anterios</a><?php }?>
        | <?php echo $inicio +1?> a <?php echo min($inicio + $max, $total)?> de <?php echo $total?> |<?php if ($page + 1 <=$totalPages){?>
        <a href="<?php echo $self?>?page=<?php echo $page + 1 ?>">siguiente</a><?php }?>
    </div>
<br>
<table class="ficha-noticia"><?php while($row= $resource -> fetch_assoc()){ ?>
	<thead>
        <tr>
            <th width="100%"><a href="ficha_noticia.php?id=<?php echo $row[id]?>" class="noticia"><?php echo $row[titulo]?></a></th>
        </tr>
	</thead>
  	<tbody>
    	<tr><td><?php echo $row[bajada]?></a></td></tr>
		<tr><td><em><?php echo $row[autor]?></em></td></tr>
		<tr><td><em><?php echo $row[categoria]?></em></td></tr><?php } ?>
  </tbody>
</table>
<?php } else { ?>
<p class="error">No hay resultado para su consulta.</p>
<?php }?>
<br>
<?php include("footer.php");?>
</div>

</body>
</html>