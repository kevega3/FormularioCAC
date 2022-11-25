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
    
    //$SelectRol = $_REQUEST['SelectRol'];
    
    include("mail/correoToken.php");
    if($EstadoEnvioUsuario == "Exitoso"){
        $insert ="INSERT INTO `persona`(`nombreEntidad`, `nombre1`, `correo`, `token`, `activo`, `idRol`) VALUES ('$NombreEntidad','$NombrePersona','$CorreoNotificador','$Token',1,'$Rol')";
        echo $insert;
    if((!$res= mysqli_query($conn,$insert))){
        echo "Error en la insercion ";
        
    }else{
        echo "Success";
    }
    }else{
        echo "No se mando el correo";
    }
// }
?>