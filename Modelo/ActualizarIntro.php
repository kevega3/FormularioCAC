<?php 
include('Conexion.php');
$Person = $_POST['Person'];
    $UPDATE = "UPDATE `persona` SET `introVideo` = '1' WHERE `persona`.`idPersona` = $Person";
    $resbuscar =  mysqli_query($conn,$UPDATE);

    if((!$res= mysqli_query($conn,$insert))){
        ECHO 2;
    }else{
        echo 1;
    }








?>





