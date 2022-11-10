<?php 
include('Conexion.php');
$prioPreg = $_POST['prioPreg'];

$consultora = $_POST['consultora'];

$idAreaCon = $_POST['idAreaCon'];

$Pregunta = $_POST['w3review'];
$TipoRespuesta = $_POST['TipoRespuesta'];


$Rol = $_POST['Rol'];
$cadena_equipo = implode(",", $Rol);

$BUSCAR = "SELECT * FROM `preguntas` WHERE pregunta = '$Pregunta'";
$resbuscar =  mysqli_query($conn,$BUSCAR);


if(mysqli_num_rows($resbuscar)==0){
       $INSERT = "INSERT INTO `preguntas`(`pregunta`, `prioPreg`, `consultora`, `idAreaCon`, `activo`, `Rol`, `TipoRespuesta`) VALUES ('$Pregunta','$prioPreg','Tinysoft',2,1,'$cadena_equipo','Select_deacuerdo')";
       // $INSERT = "INSERT INTO `preguntas`(`pregunta`, `prioPreg`, `consultora`, `idAreaCon`, `activo`, `Rol`, `TipoRespuesta`) VALUES ('$Pregunta','$prioPreg','Tinysoft','$idAreaCon',1,'$cadena_equipo','$TipoRespuesta')";
       echo $INSERT;
       if((!$res= mysqli_query($conn,$INSERT))){
              echo "1 registro exitoso INSERT";
          }else{
              
              echo "<br>";
              echo "<alert>Error, contactese con el administrador</alert>";
       }
}else{
       echo $BUSCAR;
       echo "<br>";       
       header("Location: ../Vista/Admin/");   
}






?>





