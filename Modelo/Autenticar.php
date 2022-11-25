
<?php 
include('Conexion.php');
session_start();
if($_SESSION['usuario'] == '' || $_SESSION['idPersona']== '' || $_SESSION['usuario'] == null || $_SESSION['idPersona']== null ){
    error_reporting(0);
    echo "<script>alert('No has iniciado sesion, porfavor logearse')</script>";
    echo "<script>window.location.replace('../index.php')</script>";
}else{


$varsesion = $_SESSION['usuario'];
$id = $_SESSION['idPersona'];
$varQuery = "SELECT * FROM persona   WHERE idPersona =  '$id'";
$res = mysqli_query($conn, $varQuery);
if ($varsesion == null || ($varsesion = '' || mysqli_num_rows($res)==0)) {
    echo "<script>alert('No has iniciado sesion, porfavor logearse')</script>";
    echo "<script>window.location.replace('../index.php')</script>";
    die();
}else{
    $varQuery2 = "SELECT * FROM persona WHERE idPersona =  '$id'";
    $res =  mysqli_query($conn,$varQuery2);
    while ($fila=mysqli_fetch_array($res)) {
        $RolPersona=$fila['idRol']; 
        
        $Rolarray = explode(",", $RolPersona);
        for ($i=0;$i<count($Rolarray);$i++){     
            $Rolarray[$i];    
        } 
        for($k=0;$k<5;$k++){
            if(empty($Rolarray[$k])){
                $Rolarray[$k] = 0;
            }
        }

        
        
        //$DescipcionRol =$fila['DescripcionRol']; 
    }
    
}
}

?>     


