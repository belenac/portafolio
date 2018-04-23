<?php require_once ("conexion.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
	<title><?php echo $title ;?></title>
		
	<!--CSS-->
	<!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
		
	<!--viewport-->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>

<body>
<div id="page-wrapper">
<header id="header" class="alt">
	<div class="container">
		<div class="12u 12u(narrower)">
			<div class="row">
				<div class="4u 4u(narrower)">
					<a href="index.php"><img src="img/logo-small.png" alt="Logo Cajón"></a>
				</div>
				<div class="8u 8u(narrower)">
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="cajon-del-maipo.php">Cajón del Maipo</a></li>
							<li class="submenu">
								<a href="#">Actividades</a>
								<ul>
									<li><a href="que-hacer.php">¿Qué Hacer?</a></li>
									<li><a href="donde-comer.php">¿Qué Comer?</a></li>
									<li><a href="donde-dormir.php">¿Dónde Dormir?</a></li>
								</ul>
							</li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</nav>
				</div>
			</div><!--/.row-->
		</div>
	</div><!--/.container-->
</header><!--/header-->
<div class="12u 12u(narrower) logo-movil block-840">
	<a href="index.php"><img src="img/logo-small.png" alt="Logo Cajón"></a>
</div>