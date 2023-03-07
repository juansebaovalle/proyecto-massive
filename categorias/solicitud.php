<?php
$titulo = "Solicitud Servicios";
$logo = "../img/logo-servicios.png";
$seccion_actual = "servicios";
include('../component/header.php');
?>

<!-- Portada -->
<div id="parallax-world-solicitud">

<div class="container">
    <h1 class="deepshadow headline" id="sol-title">Te ayudamos con soluciones</h1>

    <form id="solicitud" class="tagline" action="" method="post">

        <h4 class="tac subtitle punchline">Cuéntanos sobre tu <span>proyecto</span></h4>
        <div class="campos">
            <fieldset class="tac">
                <input placeholder="Tu nombre" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset class="tac">
                <input placeholder="Correo email" type="email" tabindex="2" required>
            </fieldset>
            <fieldset class="tac">
                <input placeholder="Número de contacto" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset class="tac">
                <textarea placeholder="Detalle del proyecto" tabindex="5" required></textarea>
            </fieldset>
            <fieldset class="tac campos">
                <button name="submit" type="submit" class="button" data-submit="...Sending">Enviar</button>
            </fieldset>
        </div>

    </form>


</div>
</div>

<section class="parallax-two-contact">

<div id="background-contact">

    <div class="fondo" id="fondo">
        <div class="second" id="second">
            <div class="circles">
                <div class="circle"></div>
                <div class="circle"></div>

            </div>
        </div>


    </div>

    <div id="first" class="first">
        <div class="circles">
            <div class="circle"></div>
        </div>

    </div>
</div>
</section>
<div class="deco-contact">
<div class="mailto tac punchline">
    <p>O puedes escribirnos a <a class="from-left-and-back"
            href="mailto:contacto@agenciamassive.cl">contacto@agenciamassive.cl</a></p>
</div>
</div>








<?php
    include('../component/footer.php')
?>