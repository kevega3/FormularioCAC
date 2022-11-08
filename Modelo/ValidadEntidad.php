<?php 

require("Conexion.php");
require("Key.php");
if ($_POST['entrar']) {

    $googleToken = $_POST['entrar'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$googleToken}");
    $response = json_decode($response);

    $response = (array) $response;

    if($response['success'] && ($response['score'] && $response['score'] > 0.5)){ 
		
    $codigo = trim($_REQUEST['codigo']);
    $codigo = filter_var($codigo, FILTER_SANITIZE_STRING);



    $query= "SELECT * FROM Personas   WHERE token =  '$codigo' ";
    $consulta=$cnx->prepare($query);
    $consulta->execute();
$filaModel=$consulta->fetch();
    if($filaModel>0){
        $res=sqlsrv_query($conn,$query);
        while ($fila=sqlsrv_fetch_array($res)) {
            $IdUser=$fila['id']; 
            $nombre1 = $fila['nombre1'];
        }
        session_start();
        $_SESSION['usuario']=  $nombre1;
        $_SESSION['id']=$IdUser;
         header("Location: ../Vista/");
    }
    else{
        // echo "<script>alert('El usuario no Existe')</script>";
        // echo "<script>window.location.replace('../index.php')</script>";
        header("location:../index.php?error=".base64_encode('E')); 
    }

}else{
    echo "<script>alert('Vuelve a intentarlo')</script>";
    echo "<script>window.location.replace('../index.php')</script>";
}

}else{
echo "<script>alert('Vuelve a intentarlo...')</script>";
echo "<script>window.location.replace('../index.php')</script>";
}


?>