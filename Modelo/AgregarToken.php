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
    date_default_timezone_set('America/Bogota'); 
    $fecha = date('Y-n-j');
    $insert ="INSERT INTO `persona`(`nombreEntidad`, `nombre1`, `correo`, `token`, `activo`, `idRol`,`repo1`, `repo2`, `repo3`, `repo4`, `repo5`, `repo6`, `repo7`, `repo8`, `repo9`, `repo10`, `repo11`, `repo12`, `repo13`, `repo14`, `repo15`, `repo16`, `repo17`, `repo18`, `FechaCreacion`, `Admin`,`introVideo`  ) VALUES ('$NombreEntidad','$NombrePersona','$CorreoNotificador','$Token',1,'$Rol','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','$fecha','2','0')";
    if((!$res= mysqli_query($conn,$insert))){
        echo 2;
    }else{
        include("mail/correoToken.php");
    }

?>