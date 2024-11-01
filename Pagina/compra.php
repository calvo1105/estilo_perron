<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="styles.css">
    <script src="jquery317.js"></script>
    <style>
        .gallery2 {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Espacio entre imágenes */
            justify-content: center; /* Centra las imágenes horizontalmente */
            margin-top: 70px;
        }

        .gallery2 img {
            width: 500px;
            height: 500px;
            height: auto;
            display: block;
            border: 1px solid #ddd; /* Borde de las imágenes */
            border-radius: 16px; /* Bordes redondeados opcional */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra opcional */
            transition: transform 0.3s ease; /* Transición suave para efectos hover */
        }

        .gallery2 img:hover {
            transform: scale(1.05); /* Efecto de aumento en hover */
        }

        .grid-container {
            display: grid;
            grid-template-rows: 1500px 100px;
            grid-template-columns: 1.3fr 0.5fr 3fr;
            grid-gap: 20px;
            margin: 30px 30px;
            justify-content: center;
            margin-top: 80px;
        }
        .grid-container2 {
            display: grid;
            grid-template-columns: 2fr 2fr 2fr;
            grid-gap: 20px;
            margin: 60px 60px;
            justify-content: center;
        }
        .grid-item1{
            background-color: #f4f4f4;
            text-align: center;
            border: 1px solid black;
            border-radius: 12px;
            padding: 20px;
        }
        .grid-item2{
            background-color: #f4f4f4;
            text-align: center;
        }
        #panel{
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        #panel2{
            width: 400px;
            height: 400px;
            object-fit: cover;
        }
        #encabezado{
            font-size: 65px;
            margin-top: 100px;
            margin-bottom: 70px;
        }
        h1{
            text-align: center;
        }
        .nav-links{
            margin-top: 20px;
        }
        .boton{
            display: inline-block;
            font-size: 1em;
            background: #d00505;
            padding: 10px 30px;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 500;
            margin-top: 10px;
            color: #ffffff;
            transition: 0.2s;
            max-width: 200px;
            text-align: center;
        }
        .boton:hover{
            letter-spacing: 1px;
        }
        .linknav{
            text-decoration: none;
            color: rgb(255, 255, 255);
        }
        .resultado{
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 20px;
            margin-top: 50px;
        }
        </style>
</head>
<body>
    <nav id="barrita">
        <div class="logo">
            <img src="EstiloPerron.jpeg" alt="Logo" id="logo">
        </div>
        <div class="nav-links">
            <a href="#"  id="user"></a>
            <a href="iniciosesion.html" class="nosesion">Inicia Sesión</a>
            <a href="registro.html" class="nosesion">Registrate</a>
            <a href="cesta.html" style="position: relative;">Mi cesta<span class="badge red" id="items"></span></a>
            <a href="#" class="isSesion" id="cerrarSesion" onclick="location.reload()">Cerrar Sesión</a>
        </div>
    </nav>
    <header>
        <h1>Bienvenido a Productos</h1>
        <nav id="cositadearriba">
            <ul>
                <li><a href="pagina.html" class="linknav">Inicio</a></li>
                <li><a href="compra.php" class="linknav">Productos</a></li>
                <li><a href="servicios.html" class="linknav">Servicios</a></li>
                <li><a href="#contactanos" class="linknav">Contactanos</a></li>
            </ul>
        </nav>
    </header>

    <h1 id="encabezado">Productos</h1>
    <h1>Conoce los productos que ofrecemos en Estilo Perron</h1>

    <div class="gallery2">
        <img src="Comida.png" alt="Imagen 1" width="600px">
        <img src="Juguetes.png" alt="Imagen 2" width="600px">
        <img src="Correas.png" alt="Imagen 3" width="600px">
    </div>

        <div class="grid-container2">
            <?php
            include('productos.php');
            ?>       
        </div>


    <footer id="contactanos">
        <p>Síguenos en nuestras redes sociales</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/estiloperron?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><img src="instagram.png" alt="Instagram"></a>
            <a href="https://www.tiktok.com/@estilo.perron0?_t=8q9aVLftxH4&_r=1" target="_blank"><img src="tiktok.png" alt="TikTok"></a>
            <a href="https://wa.link/dq5rya" target="_blank"><img src="whatsapp.png" alt="WhatsApp"></a>
        </div>
        <p>Encuentranos de otras formas:</p>
        <p>+57 3186330191</p>
        <p>Cra 4D #21C-28</p>
        <p>EstiloperronGabo@gmail.com</p>
    </footer>
    <script src="usuario.js"></script>
</body>
</html>