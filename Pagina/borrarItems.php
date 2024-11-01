<?php
include('config.php');
$id = $_REQUEST['id'];
$idUser = $_REQUEST['idusuario'];

$validaEmail="delete from factura where id_usuario='".$idUser."'and id_producto='".$id."' and estado='pendiente'";
$respEmail=$mysql->query($validaEmail);


$resp="";
    $resp='{"resp":"ok"}';

$mysql->close();
//echo $resp;
echo json_encode($resp);
?>