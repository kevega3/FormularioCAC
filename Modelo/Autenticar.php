
<?php 
include('Conexion.php');
session_start();
$varsesion = $_SESSION['usuario'];
$id = $_SESSION['id'];
$varQuery = "SELECT * FROM Personas   WHERE id =  '$id'";
$res = sqlsrv_query($conn, $varQuery);
$fila = sqlsrv_fetch_array($res);
if ($varsesion == null || ($varsesion = '' || $fila == 0)) {
    echo "<script>alert('No has iniciado sesion, porfavor logearse')</script>";
    echo "<script>window.location.replace('../index.php')</script>";
    die();
}else{
    $res=sqlsrv_query($conn,$varQuery);
    // while ($fila=sqlsrv_fetch_array($res)) {
    //     $Rol=$fila['Rol']; 
    //     $Nombre=$fila['Nombres']; 
    //     $Apellido=$fila['Apellido']; 
    // }
    
    // $inactividad = 60;
    // if(isset($_SESSION["timeout"])){
    //     // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
    //     $sessionTTL = time() - $_SESSION["timeout"];
    //     if($sessionTTL > $inactividad){
            
    //         echo "<script>alert('La Sesion a caducado, vuelve a loguearte')</script>";
    //         echo "<script>window.location.replace('../../index.php')</script>";
    //         die();
    //     }
    // }
    // $_SESSION["timeout"] = time(); 
}

    


?>     


