<?php
$titulo = "Contacto Massive";
$logo = "../img/logo-index.png";
$seccion_actual = "contacto";
include('../component/header.php');
?>

<!-- Portada -->
<div id="parallax-world-contact">

<div class="container">
    <h1 class="deepshadow" id="principal-title">Escríbenos</h1>

    <form id="contact" action="../component/formu-contacto.php" method="post">

        <h4 class="tac subtitle">Puedes dejar tus datos y te <span>contactámos</span></h4>
        <div class="campos">
            <fieldset class="tac">
                <input placeholder="Tu nombre" type="text" name="nombre" tabindex="1" required autofocus>
            </fieldset>
            <fieldset class="tac">
                <input placeholder="Correo email" type="email" name="email" tabindex="2" required>
            </fieldset>
            <fieldset class="tac">
                <input placeholder="Número de contacto" type="tel" name="telefono" tabindex="3" required>
            </fieldset>
            <fieldset class="tac">
                <input placeholder="Asunto" type="text" name="asunto" tabindex="4" required>
            </fieldset>
            <fieldset class="tac">
                <textarea placeholder="Mensaje" name="mensaje" tabindex="5" required></textarea>
            </fieldset>
            <fieldset class="tac campos">
                <button name="submit" type="submit" class="button">Enviar</button>
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
                <div class="contact-circle circle"></div>
                <div class="contact-circle circle"></div>
                <div class="contact-circle circle"></div>
            </div>
        </div>


    </div>

    <div id="first" class="first">
        <div class="circles">
            <div class="contact-circle circle"></div>
            <div class="contact-circle circle"></div>
            <div class="contact-circle circle"></div>
        </div>

    </div>
</div>
</section>
<div class="deco-contact">
<div class="mailto tac punchline">
    <p>O puedes escribirnos a <a class="from-left-and-back" href="mailto:contacto@agenciamassive.cl">contacto@agenciamassive.cl</a></p>
</div>
</div>




<?php
    include('../component/footer.php')
?>