<?php
include('config.php');

$productos="select * from productos";
$respEmail=$mysql->query($productos);
$cant=$respEmail->num_rows;
//$nombre=$respEmail->nombre;
$resp="";
    if($cant > 0){
        while ( $fila = $respEmail->fetch_assoc() ) {
            ?>
            <div class="grid-item1">
                <center><img src="<?php echo $fila["imagen"]; ?>" alt="dougurmet" id="panel"></center>
                <h2><?php echo $fila["nombre"]; ?></h2>
                <h2>Precio: $<?php echo $fila["precio"]; ?></h2>
                <span class="boton"><span class="carrito"  data-id="<?php echo $fila["id_producto"]; ?>">Agregar al carrito</span></span>
                <div id="resultado<?php echo $fila["id_producto"]; ?>" class="resultado" style="display: none;"></div>
            </div>
        <?php
        }
    }else{
        echo "no hay productos";
    }

$mysql->close();
//echo $resp;
?>
