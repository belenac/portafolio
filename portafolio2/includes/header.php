<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Erika Ávalos Carrasco | Portafolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.ico">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive.css" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    
    <!--JS-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/jquery.smooth-scroll.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
</head>
<body>
    <span class="ir-arriba icon-arrow-up2"><i class="fas fa-angle-up"></i></span>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#home" onclick="closeNav()">HOME</a>
        <a href="#sobre-mi" onclick="closeNav()">SOBRE MÍ</a>
        <a href="#habilidades" onclick="closeNav()">HABILIDADES</a>
        <a href="#portafolio" onclick="closeNav()">PORTAFOLIO</a>
        <a href="#contacto" onclick="closeNav()">CONTACTO</a>
    </div>
    <div id="navbar" class="sticky-container">
        <header>
            <div class="grid-container">
                <div class="grid-20 mobile-grid-30">
                    <div class="cont-logo">
                        <div class="logo">
                            <img src="assets/img/logo.png" alt="Erika Ávalos C" class="img-100">
                        </div>
                    </div>
                </div>
                <div class="grid-100">
                    <nav class="nav-principal">
                        <ul id="main_nav" class="menu">
                            <li><a class="smoothScroll current" href="#home">HOME</a></li>
                            <li><a class="smoothScroll" href="#sobre-mi">SOBRE MÍ</a></li>
                            <li><a class="smoothScroll" href="#habilidades">HABILIDADES</a></li>
                            <li><a class="smoothScroll" href="#portafolio">PORTAFOLIO</a></li>
                            <li><a class="smoothScroll" href="#contacto">CONTACTO</a></li>
                        </ul>
                    </nav>
                    <span class="btn-menu-mobile" onclick="openNav()">&#9776;</span>
                </div>
            </div>
        </header>
    </div>