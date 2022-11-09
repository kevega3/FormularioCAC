<?php



$servidor ="localhost";
$usuario ="root";
$contraseña ="";
$bd="cuestionariocac";

$conn =mysqli_connect($servidor, $usuario, $contraseña, $bd);


// $serverName = "MKBOG016\MKBOG016"; //serverName\instanceName
// $connectionInfo = array( "Database"=>"cuestionarioCAC", "UID"=>"sa", "PWD"=>"Cuent42021$*");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);

// if( $conn ) {
// }else{
//      echo "Conexión no se pudo establecer.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }

// $cadenaCnx="sqlsrv:server=MKBOG016\MKBOG016;database=cuestionarioCAC";
// 			$user="sa";
// 			$pass="Cuent42021$*";

// 			$cnx= new PDO($cadenaCnx,$user,$pass);

?>