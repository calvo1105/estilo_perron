<?php
include('config.php');
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$status = $_REQUEST['status'];

$validaEmail="select * from Usuarios where correo='".$email."'";
$respEmail=$mysql->query($validaEmail);
$cant=$respEmail->num_rows;
$resp="";
    if($cant > 0){
        $resp='{"resp":"nok","msj":"El correo '.$email.' ya se encuentra registrado con otro usuario"}';
    }else{
        $sql="insert into Usuarios (nombre,apellido,correo, contrasena,estado) values ('".$nombre."','".$apellido."','".$email ."','".md5($pass)."','".$status."')";
        $exe=$mysql->query($sql);
        $resp='{"resp":"ok","msj":"Usuario guardado con exito"}';
    }

$mysql->close();
//echo $resp;
echo json_encode($resp);
?>