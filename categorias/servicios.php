<?php
$titulo = "Servicios Massive";
$logo = "../img/logo-servicios.png";
$seccion_actual = "servicios";
include('../component/header.php');
?>

<section id="services">
    <!-- Portada -->
    <div id="parallax-world-services">


        <div id="display-services">
            <div class="slider-thumb">
                <div class="main-element container" id="title">

                    <h1 class="deepshadow" id="principal-title">Servicios Massive</h1>
                    <button class="button"><a href="#background">Ver Más</a></button>

                </div>
            </div>
        </div>


    </div>

    <section class="parallax-two-services">

        <div id="background">

            <div class="fondo" id="fondo">
                <div class="second" id="second">
                    <div class="circles">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>


            </div>

            <div id="first" class="first">
                <div class="circles">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>

            </div>

        </div>

        <!-- Main -->
        <div class="services" id="services">
            <div class="container">
                <!-- Services -->
                <div class="services-square-serv container">
                    <div class="sec-services headline">
                        <div class="logo-services tagline">
                            <img src="../img/t-shirt-brand.png">
                        </div>
                    </div>

                    <div class="sec-services headline">
                        <div class="text-services block-serv punchline">
                            <p class="subtitle">
                                Construir marca
                            </p>
                            <p class="text-bajada">
                                Te ayudamos a crear o actualizar los elementos de tu marca.
                            </p>
                            <p class="text">
                                Comunicarnos de una forma efectiva, en línea con los valores y propósitos de nuestra
                                organización
                                genera <span>conexiones</span> con nuestro <span>público objetivo</span>.
                            </p>

                            <button class="button">
                                <a href="solicitud.php" target="_blank">Solicitar</a>
                            </button>
                        </div>
                    </div>
                </div>



                <!-- Investigación -->
                <div class="services-square-serv container" id="reverse">
                    <div class="sec-services headline">
                        <div class="text-services block-serv punchline">
                            <p class="subtitle">
                                Conocer a tus usuarios
                            </p>
                            <p class="text-bajada">
                                Multiples herramientas de investigación.

                            </p>
                            <p class="text">
                                Esencial para dar forma a tu producto y garantizar la mejor <span>experiencia de
                                    usuario</span>
                                a través de un <span>buen diseño</span>.

                            </p>
                            <button class="button"><a href="solicitud.php" target="_blank">Solicitar</a></button>
                        </div>
                    </div>
                    <div class="sec-services headline tagline">
                        <div class="logo-services ">
                            <img src="../img/letrero.png">
                        </div>
                    </div>
                </div>

                <!-- Desarrollo -->
                <div class="services-square-serv container">

                    <div class="sec-services headline">
                        <div class="logo-services tagline">
                            <img src="../img/desarrollo-s.png">
                        </div>
                    </div>

                    <div class="sec-services headline">
                        <div class="text-services block-serv punchline">
                            <p class="subtitle">
                                Implementación
                            </p>
                            <p class="text-bajada">
                                Manual de marca, campañas y sitios web verán la luz
                            </p>
                            <p class="text">
                                Te ayudamos con la puesta en marcha de tus <span>campañas</span> y publicación de
                                <span>sitios web</span>
                                corporativos.
                            </p>
                            <button class="button"><a href="solicitud.php" target="_blank">Solicitar</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>



<?php
    include('../component/footer.php')
?>



