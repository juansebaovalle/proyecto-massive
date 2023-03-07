<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({ reset: true });
    </script>
</head>

<body>

    <!-- Menu navegación -->
    <header>

        <div class="container">
            <div class="row desk-nav">
                <div class="col-12">
                    <nav class="navbar">
                        <a class="nav-icon" href="../index.php">
                            <img src="<?php echo $logo; ?>" class="menu-icon" alt="Imagotipo" height="30px">
                        </a>
                        <a class="navbar-brand-header" href="../index.php">
                            <img src="../img/logo-header.png" alt="logo-massive">
                        </a>
                        <ul class="desktop-list">
                            <li><a href="../categorias/servicios.php">SERVICIOS</a></li>
                            <li><a href="../categorias/proyecto.php">PROYECTO</a></li>
                            <li><a href="../categorias/nosotros.php">NOSOTROS</a></li>
                            <li><a href="../categorias/contacto.php">CONTACTO</a></li>
                        </ul>



                        <div class="navigation">
                            <ul>
                                <li class="list">
                                    <a href="../index.php" id="btn-inicio">
                                        <span class="icon">
                                            <ion-icon name="home"></ion-icon>
                                        </span>
                                        <span class="text">Home</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="../categorias/servicios.php" id="btn-servicios">
                                        <span class="icon">
                                            <ion-icon name="code"></ion-icon>
                                        </span>
                                        <span class="text">Servicios</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="../categorias/proyecto.php" id="btn-proyecto">
                                        <span class="icon">
                                            <ion-icon name="browsers"></ion-icon>
                                        </span>
                                        <span class="text">Proyecto</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="../categorias/nosotros.php" id="btn-nosotros">
                                        <span class="icon">
                                            <ion-icon name="barcode"></ion-icon>
                                        </span>
                                        <span class="text">Nosotros</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="../categorias/contacto.php" id="btn-contacto">
                                        <span class="icon">
                                            <ion-icon name="chatboxes"></ion-icon>
                                        </span>
                                        <span class="text">Contacto</span>
                                    </a>
                                </li>

                                <div class="indicator"></div>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>

    </header>