<?php 
include('Conexion.php');
$prioPreg = $_POST['prioPreg'];

// $consultora = $_POST['consultora'];

// $idAreaCon = $_POST['idAreaCon'];

$Pregunta = $_POST['w3review'];
$TipoRespuesta = $_POST['TipoRespuesta'];


$Rol = $_POST['Rol'];
$cadena_equipo = implode(",", $Rol);
$BUSCAR = "SELECT * FROM `preguntas` WHERE pregunta = '$Pregunta'";
$resbuscar =  mysqli_query($conn,$BUSCAR);


if(mysqli_num_rows($resbuscar)==0){
       
       //$INSERT = "INSERT INTO `preguntas`(`pregunta`, `prioPreg`, `consultora`, `idAreaCon`, `activo`, `Rol`, `TipoRespuesta`) VALUES ('$Pregunta','$prioPreg','CAC',13,1,'$cadena_equipo','Select_deacuerdo')";
       $INSERT = "INSERT INTO `preguntas`(`pregunta`, `prioPreg`, `consultora`, `idAreaCon`, `activo`, `Rol`, `TipoRespuesta`) VALUES ('$Pregunta','$prioPreg','CAC',15,1,'$cadena_equipo','$TipoRespuesta')";
       //$INSERT = "INSERT INTO `preguntas`(`pregunta`, `prioPreg`, `consultora`, `idAreaCon`, `activo`, `Rol`, `TipoRespuesta`) VALUES ('$Pregunta','$prioPreg','Tinysoft','$idAreaCon',1,'$cadena_equipo','$TipoRespuesta')";
       $resbuscar =  mysqli_query($conn,$INSERT);
       
       echo "<script>window.location.replace('../Vista/Admin/')</script>";
       
}else{
       echo $BUSCAR;
       echo "<br>";     
       echo "<script>alert('No niño, no se wa poder')</script>";  
       echo "<script>window.location.replace('../Vista/Admin/')</script>";
}






?>





