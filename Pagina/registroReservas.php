<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="jquery317.js"></script>
    <style>
        .nav-links{
            margin-top: 20px;
        }
        .tabla{
            margin: 40px;
            width: 1000px;
        }
        .tabla td{
            padding: 10px;
            text-align: center;
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
            <a href="cesta.html"></span>Mi cesta<span class="badge red" id="items"></span></a>
            <a href="#" class="isSesion" id="cerrarSesion" onclick="location.reload()">Cerrar Sesión</a>
        </div>
    </nav>
    
    <header>
        <h1>Bienvenido a la Tienda de Mascotas</h1>
        <nav id="cositadearriba">
            <ul>
                <li><a href="pagina.html" class="linknav">Inicio</a></li>
                <li><a href="compra.php" class="linknav">Productos</a></li>
                <li><a href="servicios.html" class="linknav">Servicios</a></li>
                <li><a href="#contactanos" class="linknav">Contactanos</a></li>
            </ul>
        </nav>
    </header>

    <?php

        include('config.php');
        $registros="select * from reservas as a inner join Usuarios as b  on a.id_usuario=b.id_usuario  where a.estado='pendiente'";
        $respu=$mysql->query($registros);
        $cant=$respu->num_rows;
        $tabla="<table border='1' class='tabla' >";
        $tabla.="<tr> <th>Fecha</th><th>Hora</th><th>Tipo</th><th>Cliente</th><th>Acciones</th>";
        $tabla.='</tr>';
        if($cant == 0){
            echo  "No hay reservas pendientes";
            } else{
            while ($row = $respu->fetch_assoc()) {
                $tabla.= '<tr>';
                $tabla.='<td>'.$row['fecha_reserva'].'</td>';
                $tabla.='<td>'.$row['hora_reserva'].'</td>';
                $tabla.='<td>'.$row['tipo_servicio'].'</td>';
                $tabla.='<td>'.$row['nombre'].' '.$row['apellido'].'</td>';
                $tabla.='<td><button class="cancelar" data-id="'.$row['id_reserva'].'" data-oper="cancelado">Cancelar</button><button id="atencion" class="cancelar" data-id="'.$row['id_reserva'].'" data-oper="atendido">Atender</button></td>';
                $tabla.='</tr>';
                }
            
            }
        $tabla.="<table>";
        $mysql->close();

        echo   $tabla;

    ?>
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