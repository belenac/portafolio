<div>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="registro.php">Registro</a></li>
<li><a href="contacto.php">Contacto</a></li>
<li><a href="noticias.php">Noticias</a></li>
<li><a href="boleta.php">Boleta</a></li>
<?php if(!$_SESSION[user_id]){?>
<li><a href="login.php">Ingresar</a></li>
<?php }else{?>
<li><a href="logout.php">Salir</a></li>
<?php }?>
</ul>
</nav>
</div>