<?php
include('config.php');
$id = $_REQUEST['id'];
$oper = $_REQUEST['oper'];

 $productos="update reservas set estado='".$oper."' where id_reserva='".$id."'";
$respEmail=$mysql->query($productos);
$resp='{"resp":"ok","msj":"Ha ingresado con exito"}';

$mysql->close();
echo json_encode($resp);
?>