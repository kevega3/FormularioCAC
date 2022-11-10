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
        echo "<script>alert('Error ERROR, contactese con el admin UPDATE ')</script>";
    }else{
        include("mail/correoToken.php");
        if(($EstadoEnvioUsuario == "Exitoso")){
            echo "1 registro exitoso UPDATE";
        }else{
            echo "<alert>Error, contactese con el administrador</alert>";
        }
    }

?>