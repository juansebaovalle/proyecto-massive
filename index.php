<?php
$titulo = "Agencia Massive";
$logo = "../img/logo-index.png";
$seccion_actual = "inicio";
include('component/header.php');
?>

<!-- Main -->
<section id="inicio">
	
	<div id="parallax-world-of-ugg">

		<section id="home-logo" class="container">
			<div class="title">

				<div class="main-element" id="tittle">

					<h1 class="deepshadow headline">Massive</h1>
					<h3 class="deepshadow tagline">Piensa en Grande</h3>
				</div>

				<div class="main-element punchline">
					<a href=""><img src="./img/Imagotipo.png" id="imagen"></a>
				</div>


			</div>
		</section>

		<section>
			<div class="parallax-one">

				<div class="content punchline">
					<div class="content__container">
						<p class="content__container__text">
							Hazlo
						</p>

						<ul class="content__container__list">
							<li class="content__container__list__item">Simple!</li>
							<li class="content__container__list__item">Efectivo!</li>
							<li class="content__container__list__item">Grande!</li>
							<li class="content__container__list__item">Massive!</li>
						</ul>
					</div>

				</div>
			</div>
		</section>


		<section class="sect-one">
			<div class="circles">
				<div class="circle"></div>
				<div class="circle"></div>
				<div class="circle"></div>
			</div>
			<div class="block headline">
				<div class="tagline">
					<p>"La mejor publicidad</p>
					<p class="blue-font">es la que hacen los clientes contentos".</p>
					<hr class="hr-index">
					<p class="text-align-right little-font punchline">Philip Kotler</p>
				</div>
			</div>

		</section>


		<!-- Promocional massive -->

		<section class="parallax-two">

			<div id="background">
				<div class="fondo" id="fondo">
					<div id="textLayer" class="contentLayer">
						<h2 class="second" id="second">HAZLO MASSIVE</h2>
					</div>
				</div>

				<div id="first" class="first">

				</div>
			</div>

		</section>




		<section class="form-contact" id="form-index">
			<div class="form">
				<h4 class="form-title">Hablemos, déjanos tu <span>contacto</span></h4>
				<form action="/action_page.php">

					<div class="field-form">

						<input type="text" id="contacto-dato" name="dcont">

						<input class="btn" type="submit" value="Enviar">

					</div>
				</form>
			</div>
		</section>



	</div>
</section>







<?php
	include('component/footer.php')
?>