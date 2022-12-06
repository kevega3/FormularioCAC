
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
        $Report1 = $fila['repo1']; 
        $Report2 = $fila['repo2']; 
        $Report3 = $fila['repo3']; 

        $Report4 = $fila['repo4']; 
        $Report5 = $fila['repo5']; 
        $Report6 = $fila['repo6']; 

        $Report7 = $fila['repo7']; 
        $Report8 = $fila['repo8']; 
        $Report9 = $fila['repo9']; 

        $Report10 = $fila['repo10']; 
        $Report11 = $fila['repo11']; 
        $Report12 = $fila['repo12']; 

        $Report13 = $fila['repo13']; 
        $Report14 = $fila['repo14']; 
        $Report15 = $fila['repo15']; 
        $Report16 = $fila['repo16']; 
        $Report17 = $fila['repo17']; 
        $Report18 = $fila['repo18'];
         
        $Rolarray = explode(",", $RolPersona);
        for ($i=0;$i<count($Rolarray);$i++){     
            $Rolarray[$i];    
        } 
        for($k=0;$k<5;$k++){
            if(empty($Rolarray[$k])){
                $Rolarray[$k] = 0;
            }
        }
    }
    
}
}


    
?>     


