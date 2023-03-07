<?php
$titulo = "Proyecto Massive";
$logo = "../img/logo-proyecto.png";
$seccion_actual = "proyecto";
include('../component/header.php');
?>

<div id="back-proyect">
        <!-- Portada -->

        <div id="parallax-world-proyect">

            <div id="display-proyect">
                <div class="main-element container title" id="title">

                    <h1 class="deepshadow" id="principal-title">Proyecto Massive</h1>

                </div>

                <!-- Iphone -->
                <div class="phone main-element" id="transt">
                    <div class="notch">
                    </div>
                    <div class="screen">
                    </div>
                </div>

            </div>

        </div>




        <!-- Promocional -->

        <section class="parallax-one-proyect">
            <div class="content mt-4">
                <div class="content__container mb-4" id="after-cont">
                    <p class="content__container__text">
                        Ser una solución integral de marketing digital
                    </p>
                </div>

            </div>

        </section>


        <article class="proyect-det">
            <div class="second" id="p-second">
                <div class="circles">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>
            <div class="container">
                <div class="proyect-bajada">
                    <div class="proyect-details headline">
                        <div class="img-proyect details tagline">
                            <img src="../img/proyecto-investigacion.png">
                        </div>
                        <div class="details punchline">
                            <h3 class="subtitle">Brief e Investigación</h3>

                            <p class="text">Para asegurar el éxito de un proyecto es necesario establecer las bases
                                en estudios de mercado y test de usuarios, conocer a nuestro público objetivo.</p>
                        </div>
                    </div>

                    <div class="proyect-details headline">
                        <div class="details tac punchline">
                            <h3 class="subtitle">Desarrollo</h3>

                            <p class="text">Conociendo los gustos y comportamiento de nuestros consumidores finales,
                                maquetar y prototipar interpretando la información recolectada.</p>
                        </div>
                        <div class="img-proyect details tagline">
                            <img src="../img/proyecto-desarrollo.png">
                        </div>
                    </div>
                </div>
            </div>

        </article>




        <div class="separate">

        </div>

        <section class="parallax-two-proyect">

            <div id="background">
                <div class="fondo" id="fondo">
                    <div id="textLayer" class="contentLayer">
                        <h2 class="second" id="second">PROYECTO MASSIVE</h2>
                    </div>
                </div>

                <div id="first" class="first">

                </div>



            </div>

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

        </section>
    </div>


<?php
    include('../component/footer.php')
?>