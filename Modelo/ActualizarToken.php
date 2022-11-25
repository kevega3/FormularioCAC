<?php 
include ('Conexion.php');
require("mail/class.phpmailer.php");
require("mail/class.smtp.php");
$CorreoNotificador = $_REQUEST['CorreoNotificador']; 
$x=0;
$y=10;
$Strings = '0123456789abcdefghijklmnopqrstuvwxyz';
$Token = substr(str_shuffle($Strings), $x, $y);
$idRe = $_REQUEST['idRe']; 
$UpbateUser ="UPDATE `persona` SET `token`='$Token'  WHERE idPersona = '$idRe'";
    if(!$res = mysqli_query($conn,$UpbateUser)){ 
      echo "Error";
    }else{
        include("mail/correoToken.php");
        if(($EstadoEnvioUsuario == "Exitoso")){
            echo "Success";
        }else{
            echo "Error";
        }
    }

?>