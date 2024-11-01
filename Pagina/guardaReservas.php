<?php
include('config.php');
$fecha = $_REQUEST['fecha'];
$hora = $_REQUEST['hora'];
$tipo = $_REQUEST['tipo'];
$idUser = $_REQUEST['idUser'];

$validaEmail="select * from reservas where fecha_reserva='".$fecha."' and hora_reserva='".$hora."' and tipo_servicio='".$tipo."' and id_usuario='".$idUser."'";
$respEmail=$mysql->query($validaEmail);
$cant=$respEmail->num_rows;
$resp="";
    if($cant > 0){
        $resp='{"resp":"nok","msj":"La reserva con estos datos ya se ha ingresado"}';
    }else{
        $sql="insert into reservas (fecha_reserva,hora_reserva,tipo_servicio,id_usuario,estado) values ('".$fecha."','".$hora."','".$tipo ."','".$idUser."','pendiente')";
        $exe=$mysql->query($sql);
        
        $resp='{"resp":"ok","msj":"Reserva guardada con exito"}';
    }

$mysql->close();
//echo $resp;
echo json_encode($resp);
?>