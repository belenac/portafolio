<?php 
$title=" Contacto | Cajón del Maipo" ;
include "include/header.php" ; 
?>
<div class="seccion bg-contacto">
    <div class="container">
        <div class="12u 12u(narrower)">
            <h1>Contacto</h1>
            <form action="" method="post" name="contacto">
                <div class="row 50%">
                    <div class="12u">
                        <input type="text" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u">
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u">
                        <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul>
                            <li><input type="submit" name="enviar" placeholder="Enviar"></li>
                        </ul>
                    </div>
                </div>
            </form>
            <h2>Mapa General</h2>
		</div><!--/.container-->
	</div>
	<div class="12u 12u(narrower)">
		<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.6402124670644!2d-70.35457988479574!3d-33.640569680719885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967cd5c46b577c0d%3A0xd879db0321c2d8c1!2sCaj%C3%B3n+del+Maipo!5e0!3m2!1ses-419!2scl!4v1468364438199" width="100%" height="250"></iframe>
		</div>
	</div>
	<div class="container">
		<div class="locaciones">
                <h2>Como llegar</h2>
                <div class="12u 12u(narrower) locaciones-cajon">
                    <div class="texto-cajon titulo-01">
                        <h3>Llegar en bus</h3>
                    </div>
                    <div class="caja-cajon caja-01">
                        <div class="12u 12u(narrower)">
                            <p>Existe una línea de buses que sale del Terminal San Borja en Estación Central, cada media hora. El viaje toma 2 horas. Otra opción es tomar la línea 5 del Metro y bajarse en la Estación Plaza Puente Alto y luego un bus o microbus que diga “Cajón del Maipo”, estos también hacen el recorrido por Vicuña Mackenna, Concha y Toro, Eyzaguirre, Vizcachas hasta el Camino Volcán Cajón del Maipo.</p>
                        </div>
                    </div>
				</div>
				<div class="12u 12u(narrower) locaciones-cajon">
                    <div class="texto-cajon titulo-02">
                        <h3>Llegar en automóvil</h3>
                    </div>
                    <div class="caja-cajon caja-02">
                        <div class="12u 12u(narrower)">
                            <p>Por Av. La Florida saliendo de Santiago, tomar Ruta G-25 que lleva a San Gabriel. Otra opción es por Av. La Florida o Av. Vicuña Mackenna hasta llegar a Puente Alto. En la calle Eyzaguirre desviar a la izquierda hacia Las Vizcachas y emplamar con Ruta G-25.</p>
                            <p>Tiempo aproximado de viaje: 50 minutos desde Plaza Egaña hasta la Plaza de San José.</p>
                        </div>
                    </div><!--/.panel-->
                </div><!--/#accordion-->
            </div><!--/.locaciones-->
	</div><!--/.row-->   
    <div class="clear"></div>
</div><!--/.destacados-->
<?php include "include/footer.php" ; ?>