<?php 
$title=" Home | Cajón del Maipo" ;
include "include/header.php" ; 
?>
<div class="banner">

		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="img/banner01.jpg" alt=""></div>
				<div class="swiper-slide"><img src="img/banner02.jpg" alt=""></div>
				<div class="swiper-slide"><img src="img/banner03.jpg" alt=""></div>
				<div class="swiper-slide"><img src="img/banner04.jpg" alt=""></div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-button-prev swiper-button-white"></div>
		</div>

</div>
<!-- 
<div  id="cont_94e29f5237cd14340d5927a431d312b8"></div>
<div id="cont_960ead5c9dd4ef1013160ed657795db2"></div>
-->
<div class="bg-inicio">
	<div class="row">
		<div class="4u 12u(narrower)">
			<article class="act-01">
				<span class="fa-stack fa-4x">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-futbol-o fa-stack-1x fa-inverse"></i>
				</span>
				<h3>¿Qué hacer?</h3>
				<ul>
					<li class="btn"><a href="que-hacer.php">Ver más</a></li>
				</ul>
			</article>
		</div>
		<div class="4u 12u(narrower)">
			<article class="act-02">
				<span class="fa-stack fa-4x">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-glass fa-stack-1x fa-inverse"></i>
				</span>
				<h3>¿Qué comer?</h3>
				<ul>
					<li class="btn"><a href="donde-comer.php">Ver más</a></li>
				</ul>
			</article>
		</div>
		<div class="4u 12u(narrower)">
			<article class="act-03">
				<span class="fa-stack fa-4x">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-bed fa-stack-1x fa-inverse"></i>
				</span>
				<h3>¿Dónde dormir?</h3>
				<ul>
					<li class="btn"><a href="donde-dormir.php">Ver más</a></li>
				</ul>
			</article>
		</div>
	</div>
</div>
<div class="bg-inicio-actividades">
	<div class="container">
		<h2>Actividades del mes</h2>
		<div class="row">
			<div class="4u 12u(narrower)">
				<figure> 
					<img src="img/canopy.jpg" alt="canopy">
					<figcaption>
						<h3>Tiroleza (Canopy)</h3>
						<p>Nuestra tiroleza (canopy) sobre el río Maipo es quizás una de las actividades mas excitantes.</p>
						<ul>
							<li class="btn"><a href="tiroleza.php">Leer más...</a></li>
						</ul>
					</figcaption>
				</figure>
			</div>
			<div class="4u 12u(narrower)">
				<figure> 
					<img src="img/bungy.png" alt="bungee">
					<figcaption>
						<h3>Bungee</h3>
						<p>Te damos la oportunidad de vivir una de las experiencias más fascinantes de tu vida.</p> 
						<ul>
							<li class="btn"><a href="bungee.php">Leer más...</a></li>
						</ul> 
					</figcaption>
				</figure>
			</div>
			<div class="4u 12u(narrower)">	
				<figure> 
					<img src="img/cabalgata-inti.jpg" alt="Cabalgatas Inti">
					<figcaption>
						<h3>Cabalgatas Inti</h3>
						<p>Si buscas una experiencia en la alta montaña y llegar a lugares que sólo los arrieros conocen.</p> 
						<ul>
							<li class="btn"><a href="cabalgatas.php">Leer más...</a></li>
						</ul>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="clear"></div>
	</div><!--/.container-->
</div><!--/.bg-inicio-actividades-->
<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 4500,
        autoplayDisableOnInteraction: false
    });
</script>
<?php include "include/footer.php" ; ?>