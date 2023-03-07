<?php
$titulo = "Nosotros Massive";
$logo = "../img/logo-about.png";
$seccion_actual = "nosotros";
include('../component/header.php');
?>

    <!-- Portada -->

    <div id="parallax-world-aboutus">

        <div class="display-aboutus container">
            <div class="main-element title" id="title">
                <h1 class="deepshadow" id="principal-title">Somos Massive</h1>
                <h3 class="deepshadow">Investigación <span>|</span> Desarrollo Web <span>|</span> Marketing Digital</h3>

            </div>

            <div class="main-element main-element-aboutus">
                <img class="content-image" src="../img/coffee-cup.png">
            </div>
        </div>
    </div>

    <article class="cont-about">
        <div class="container">
            <div class="parrafo">
                <p class="about-us tagline">
                    Somos una agencia de medios digitales especializada en <span>investigación</span> de usuario,
                    <span>desarrollo web</span>, posicionamiento, estrategia de <span>marketing</span> y creación de
                    marcas.
                </p>
            </div>
            <div class="mockup-mac punchline">
                <img class="content-image" src="../img/mockup-mac.png">
            </div>

        </div>

    </article>


    <!-- Parallax -->
    <section class="parallax-two-about">
        <div id="background-about">

            <div id="first" class="first">
                <div class="second-about" id="second-about">

                    <div id="textLayer" class="contentLayer">
                        <h4>Encuéntranos</h4>
                    </div>
                </div>
            </div>

            <div class="fondo" id="fondo">
                <a target="_blank" href="#" class="from-left-and-back"><i class="bi bi-behance"></i></a>
                <a target="_blank" href="#" class="from-left-and-back"><i class="bi bi-linkedin"></i></a>
                <a target="_blank" href="https://www.instagram.com/agencia_massive/" class="from-left-and-back"><i class="bi bi-instagram"></i></a>
            </div>

        </div>

    </section>

    <section class="about-text parrafo">
        <p class="container tac vision punchline">
            En Massive buscamos ofrecer <span>servicios profesionales</span> al alcance de todos, lograr 
            <span>resultados medibles</span> para nuestros clientes garantizando un impacto positivo en la 
            implementación.
        </p>
    </section>








<?php
    include('../component/footer.php')
?>