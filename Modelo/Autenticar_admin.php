
<?php 
include('Conexion.php');
session_start();
$varsesion = $_SESSION['usuario_Admin'];
$id = $_SESSION['idAdmin'];

$varQuery = "SELECT * FROM `loginadmin` WHERE idAdmin = $id";
$res = mysqli_query($conn, $varQuery);
if ($varsesion == null || ($varsesion = '' || mysqli_num_rows($res)==0)) {
    echo "<script>alert('No has iniciado sesion, porfavor logearse')</script>";
    echo "<script>window.location.replace('../../index.php')</script>";
    die();
}else{
    $varQuery2 = "select persona.*,roles.* from persona,roles where persona.idRol = roles.idRol";
    
    $res2 =  mysqli_query($conn,$varQuery2);
    if(mysqli_num_rows($res2)==0){
    }
    while ($fila=mysqli_fetch_array($res2)) {
        $RolPersona=$fila['idRol']; 
    }
    
}

    


?>     


