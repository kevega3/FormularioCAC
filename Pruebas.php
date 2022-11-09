
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<?php 
$RolPersona = '1  ';
$Rol = '1,2,3,4,5';
// if(str_contains($RolPersona, '1') || str_contains($RolPersona, '2')   ){
//     echo "hola";
// }



$cadena = "1,2,3,4,5";
$separador = ",";
$separada = explode($separador, $cadena);

if(in_array("1", $separada)){
    echo "hola";
}   

// var_dump($separada);
?>