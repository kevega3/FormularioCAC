<?php 

require('Conexion.php');

$user = trim($_REQUEST['user']);
$pass = trim($_REQUEST['pass']);
$user = filter_var($user, FILTER_SANITIZE_STRING);
$pass = filter_var($pass, FILTER_SANITIZE_STRING);



$query= "SELECT * FROM `loginadmin`  WHERE usuario =  '$user' AND pass = '$pass'";
$res= mysqli_query($conn,$query);
if(!$res || mysqli_num_rows($res)==0){
    
        header("location:../Vista/index.php"); 
        die();    
}
else{
    while ($fila= mysqli_fetch_array($res)) {
        $IdUser=$fila['idPersona']; 
        $nombre1 = $fila['nombre1'];
    }
    session_start();
    $_SESSION['usuario']=  $nombre1;
    $_SESSION['idPersona']=$IdUser;
     header("Location: ../Vista/Admin/");
}



?>