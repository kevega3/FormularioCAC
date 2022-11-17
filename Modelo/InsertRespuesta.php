<?php 
include ('Conexion.php');
require("mail/class.phpmailer.php");
require("mail/class.smtp.php");
$idPersona = $_REQUEST['idPersona']; 
$idPregunta = $_REQUEST['Pregunta']; 
$Respuesta =  $_REQUEST['Respuesta2'];


// if(is_array($Respuesta)){
// $cadena_equipo = implode(",", $Respuesta);
// }else{
//     $cadena_equipo = $Respuesta;
// }
$RespuestaAbierta=  $_REQUEST['RespuestaAbierta'];



date_default_timezone_set('America/Bogota'); 
$fecha = date('j-n-Y'). " " .date('g:i:s A');
        $insert ="INSERT INTO `respuesta`(`idPersona`, `idPregunta`, `fechaCreacion`, `Respuesta`, `JustificacionRespuesta`) VALUES ('$idPersona','$idPregunta','$fecha','$Respuesta','$RespuestaAbierta')";
    if((!$res= mysqli_query($conn,$insert))){
        echo "Error";
    }else{
        echo "1 registro exitoso INSERT";
    }
    

?>