<?php 
include ('Conexion.php');
require("mail/class.phpmailer.php");
require("mail/class.smtp.php");
$CorreoNotificador = $_REQUEST['CorreoNotificador']; 
$x=0;
$y=10;
$Strings = '0123456789abcdefghijklmnopqrstuvwxyz';
$Token = substr(str_shuffle($Strings), $x, $y);

    $NombreEntidad = $_REQUEST['NombreEntidad']; 
    $NombrePersona = $_REQUEST['NombrePersona'];
    $Rol = $_POST['RespuestaRol'];
    
    $insert ="INSERT INTO `persona`(`nombreEntidad`, `nombre1`, `correo`, `token`, `activo`, `idRol`) VALUES ('$NombreEntidad','$NombrePersona','$CorreoNotificador','$Token',1,'$Rol')";
    if((!$res= mysqli_query($conn,$insert))){
        echo 2;
    }else{
        include("mail/correoToken.php");
    }

?>