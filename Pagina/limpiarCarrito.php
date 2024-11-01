<?php
include('config.php');
$idUser = $_REQUEST['idusuario'];

$validaEmail="delete from factura where id_usuario='".$idUser."' and estado='pendiente'";
$respEmail=$mysql->query($validaEmail);


$resp="";
    $resp='{"resp":"ok"}';

$mysql->close();
//echo $resp;
echo json_encode($resp);
?>