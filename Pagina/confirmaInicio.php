<?php
include('config.php');
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

$validaEmail="select * from Usuarios where correo='".$email."'and contrasena='".md5($pass)."'";
$respEmail=$mysql->query($validaEmail);
$cant=$respEmail->num_rows;
//$nombre=$respEmail->nombre;
$resp="";
    if($cant > 0){
        while ( $fila = $respEmail->fetch_assoc() ) {
            $nombre= $fila["nombre"]." ".$fila["apellido"];
            $idUser= $fila["id_usuario"];
            $statuse= $fila["estado"];
        }   
        $resp='{"resp":"ok","msj":"Ha ingresado con exito","usuario":"'.$nombre.'","idUser":"'.$idUser.'","statuse":"'.$statuse.'"}';
    }else{
        $resp='{"resp":"nok","msj":"El usuario no existe, revise que esté bien el correo o la contraseña"}';
    }

$mysql->close();
//echo $resp;
echo json_encode($resp);
?>