<?php
$servername = "localhost";
$username = "root";
$password = "";


// $password = "z#wc4C2o18*";
// $username = "altocost_wp";

$dbname = "cuestionariocac";



$conn = new mysqli("$servername","$username","$password","$dbname");
$conn->set_charset("utf8");

if ($conn -> connect_errno) {
	echo "Falló la conexión: " . $conn -> connect_error;
	exit();
}
?>

