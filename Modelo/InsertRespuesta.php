<?php 
include ('Conexion.php');
$idPersona = $_POST['idPersona']; 
$idPregunta = $_POST['Pregunta']; 
$Respuesta =  $_POST['Respuesta'];
$Actualizar =  $_POST['Actualizar'];
$RespuestaAbierta=  $_POST['RespuestaAbierta'];

date_default_timezone_set('America/Bogota'); 
$fecha = date('j-n-Y'). " " .date('g:i:s A');
        $insert ="INSERT INTO `respuesta`(`idPersona`, `idPregunta`, `fechaCreacion`, `Respuesta`, `JustificacionRespuesta`) VALUES ('$idPersona','$idPregunta','$fecha','$Respuesta','$RespuestaAbierta')";
    if((!$res= mysqli_query($conn,$insert))){
        echo 3;
    }else{
        $actualizarPersona ="UPDATE `persona` SET `$Actualizar` = '1' WHERE `persona`.`idPersona` = 1";
        if((!$res= mysqli_query($conn,$actualizarPersona))){
            echo 2;
        }else{
            echo 1;
        }
    }
?>