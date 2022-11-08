<?php
// $serverName="MKBOG016\MKBOG016";
// $ConnectionInfo = array("Database"=>"DWH","UID"=>"sa","PWD"=>"Cuent42021$*");

// $conn=sqlsrv_connect($serverName, $ConnectionInfo);

// if ($conn) {
// }
// else{
//     echo "Conexion no se hizo ...";
//     die( print_r(sqlsrv_errors(),true));
// }
$serverName = "MKBOG016\MKBOG016"; //serverName\instanceName
$connectionInfo = array( "Database"=>"cuestionarioCAC", "UID"=>"sa", "PWD"=>"Cuent42021$*");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$cadenaCnx="sqlsrv:server=MKBOG016\MKBOG016;database=cuestionarioCAC";
			$user="sa";
			$pass="Cuent42021$*";

			$cnx= new PDO($cadenaCnx,$user,$pass);

?>