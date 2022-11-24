<?php 
include ('Conexion.php');
$idPersona = $_POST['idPersona']; 
$idPregunta = $_POST['Pregunta']; 
$Respuesta =  $_POST['Respuesta'];
$RespuestaAbierta=  $_POST['RespuestaAbierta'];

date_default_timezone_set('America/Bogota'); 
$fecha = date('j-n-Y'). " " .date('g:i:s A');
        $insert ="INSERT INTO `respuesta`(`idPersona`, `idPregunta`, `fechaCreacion`, `Respuesta`, `JustificacionRespuesta`) VALUES ('$idPersona','$idPregunta','$fecha','$Respuesta','$RespuestaAbierta')";
    if((!$res= mysqli_query($conn,$insert))){
        echo "Error";
    }else{
        echo "Success";
        
    }

    
    
?>