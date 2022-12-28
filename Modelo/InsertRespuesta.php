<?php 
include ('Conexion.php');
$idPersonaSUC=filter_var($_POST['idPersona'], FILTER_SANITIZE_STRING);
$idPersona = preg_replace('/[@\.\;\"\´  ]+/','',$idPersonaSUC);

$idPreguntaSUC=filter_var($_POST['Pregunta'], FILTER_SANITIZE_STRING);
$idPregunta = preg_replace('/[@\.\;\"\´  ]+/','',$idPreguntaSUC);

$RespuestaSUC=filter_var($_POST['Respuesta'], FILTER_SANITIZE_STRING);
$Respuesta = preg_replace('/[@\.\;\"\´  ]+/','',$RespuestaSUC);

$ActualizarSUC=filter_var($_POST['Actualizar'], FILTER_SANITIZE_STRING);
$Actualizar = preg_replace('/[@\.\;\"\´  ]+/','',$ActualizarSUC);

$RespuestaAbiertaSUC=filter_var($_POST['RespuestaAbierta'], FILTER_SANITIZE_STRING);
$RespuestaAbierta = preg_replace('/[@\.\;\"\´  ]+/','',$RespuestaAbiertaSUC);

date_default_timezone_set('America/Bogota'); 
$fecha = date('j-n-Y'). " " .date('g:i:s A');
        $insert ="INSERT INTO `respuesta`(`idPersona`, `idPregunta`, `fechaCreacion`, `Respuesta`, `JustificacionRespuesta`) VALUES ('$idPersona','$idPregunta','$fecha','$Respuesta','$RespuestaAbierta')";
    if((!$res= mysqli_query($conn,$insert))){
        echo 3;
    }else{
        $actualizarPersona ="UPDATE `persona` SET `$Actualizar` = '1' WHERE `persona`.`idPersona` = $idPersona";
        if((!$res= mysqli_query($conn,$actualizarPersona))){
            echo 2;
        }else{
            echo 1;
        }
    }
?>