<?php 
include ('Conexion.php');
require("mail/class.phpmailer.php");
require("mail/class.smtp.php");

        $id = $_POST['idPersona']; 
    //     $Update ="UPDATE `persona` SET `token` = '*@*¨$$****¨*¡?*' WHERE `persona`.`idPersona` = $id";
    // if((!$res= mysqli_query($conn,$Update))){
    //     echo 2;
    // }else{
        $Buscar ="SELECT * FROM `persona` WHERE idPersona = $id";
        $res =  mysqli_query($conn,$Buscar);
        while ($fila=mysqli_fetch_array($res)) {
            $nombrePersona = $fila['nombre1']; 
            $NombreEntidad = $fila['nombreEntidad']; 
        }
        include('mail/CorreoLucia.php');
    // }
?>