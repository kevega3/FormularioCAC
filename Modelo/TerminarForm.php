<?php  
include ('Conexion.php');
require("mail/class.phpmailer.php");
require("mail/class.smtp.php");

    $idPersona = $_POST['idPersona']; 
    $Buscar = "SELECT * FROM `persona` WHERE idPersona = $idPersona";
    $resBuscar= mysqli_query($conn,$Buscar);
    while ($fila=mysqli_fetch_array($resBuscar)) {
        $NombreEntidad = $fila['nombreEntidad'];
        $nombrePersona = $fila['nombre1'];
    }
    include('mail/CorreoLucia.php');
    if($EstadoEnvioUsuario == "Exitoso"){
        $Actualizar = "UPDATE `persona` SET `token`='Contraseña_invalida@*' WHERE idPersona = $idPersona";
        $resActualizar= mysqli_query($conn,$Actualizar);
        echo "Success";
    }else{
        echo "Error";
    }


?>