<?php
include('config.php');
$idUser = $_REQUEST['idusuario'];

$productos="update factura set estado='comprado' where id_usuario='".$idUser."'";
$respEmail=$mysql->query($productos);


$resp="";
    $resp='{"resp":"ok"}';

$mysql->close();
//echo $resp;
echo json_encode($resp);
?>