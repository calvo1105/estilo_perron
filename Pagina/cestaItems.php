<?php
include('config.php');
$iduser=$_REQUEST['id'];
 $productos="select a.id_producto,nombre,count(a.id_producto) as cant,b.precio,(b.precio * count(a.id_producto)) as total from factura as a inner join productos as b on a.id_producto=b.id_producto where a.estado='pendiente' and a.id_usuario=".$iduser."  GROUP by a.id_producto";
$respPreoductos=$mysql->query($productos);
 $cant=$respPreoductos->num_rows;
//$nombre=$respPreoductos->nombre;
$resp="";
$apagar= 0;
    if($cant > 0){
        while ( $fila = $respPreoductos->fetch_assoc() ) {
            ?>
            <li> Producto: <?php echo $fila["nombre"]; ?> - cantidad: <?php echo $fila["cant"]; ?> - v/u: <?php echo $fila["precio"]; ?> - total: <?php echo $fila["total"]; ?> <button onclick="eliminar('<?php echo $fila['id_producto'];?>','<?php echo $iduser;?>')"  class="eliminarItem">Eliminar</button></li>
        <?php
        $apagar+= $fila["total"];
        }
        echo '<p>Total a pagar: $<span id="total-price">'.$apagar.'</span></p>';
    }else{
        echo "No hay productos";
    }

$mysql->close();
//echo $resp;
?>