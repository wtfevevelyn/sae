<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Ropa</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap" rel="stylesheet">
</head>

<body id="body">
    <!-- Video de fondo -->
    <video autoplay muted loop id="bgVideo">
        <source src="<?php echo 'Apoyo_grafico/videoropa.mp4'; ?>" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>

    <!-- Encabezado -->
    <header>
        <div class="icon__menu" id="btn_open">
            <i class="fa-solid fa-list"></i>
        </div>
        <!-- Botón de registro -->
        <div class="register-box">
            <a href="<?php echo 'login - copia/index.php'; ?>" class="btn-register">Regístrate</a>
        </div>
    </header>

    <!-- Menú lateral -->
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <h4>SAE</h4>
            <i class="fa-solid fa-hippo"></i>
        </div>

        <div class="option__menu">
            <a href="<?php echo 'Principal.php'; ?>" class="select">
                <div class="option">
                    <i class="fas fa-home"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="<?php echo 'Productos.html'; ?>">
                <div class="option">
                    <i class="fa-solid fa-tag"></i>
                    <h4>Productos</h4>
                </div>
            </a>
            <a href="<?php echo 'Novedades.php'; ?>">
                <div class="option">
                    <i class="fa-solid fa-star"></i>
                    <h4>Novedades</h4>
                </div>
            </a>
            <a href="<?php echo 'Contacto.php'; ?>">
                <div class="option">
                    <i class="fa-solid fa-envelope"></i>
                    <h4>Contactos</h4>
                </div>
            </a>
        </div>
    </div>

    <!-- Contenido principal -->
    <main>
        <div class="container">
            <div class="intro">
                <h2 class="titulo_principal">Bienvenidos a SAE</h2>
                <p>SAE es tu tienda de ropa juvenil favorita, ofreciendo las últimas tendencias en moda otoñal. Explora nuestras colecciones y descubre la ropa que te hará destacar.</p>
            </div>
            <div class="image" id="galeria">
                <img src="<?php echo 'Apoyo_grafico/portada.jpeg'; ?>" alt="Colección de Ropa S.A.E">
            </div>
        </div>
    </main>

    <script src="Script.js"></script>
</body>

</html>
