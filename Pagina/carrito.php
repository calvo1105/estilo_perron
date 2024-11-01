<?php
include('config.php');
$id = $_REQUEST['id'];
$idUser = $_REQUEST['idUser'];
$totitems=0;
$validaEmail="insert into factura (id_usuario,id_producto,fecha_compra,estado) values ('".$idUser."','".$id."',now(),'pendiente')";
$respEmail=$mysql->query($validaEmail);

$cantItems="select count(id_producto) as items from factura where id_usuario='".$idUser."' and estado='pendiente'";
$numitems=$mysql->query($cantItems);
while ($fila = $numitems->fetch_assoc()) {
    $totitems= $fila['items'];
}
$resp="";
    $resp='{"resp":"ok","msj":"Producto añadido al carrito","items":"'.$totitems.'"}';

$mysql->close();
//echo $resp;
echo json_encode($resp);
?>