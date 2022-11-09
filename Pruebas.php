<?php 
// $select = $_POST['select'];
// for ($i=0;$i<count($select);$i++)    
// {     
// echo "<br>". $select[$i];    
// } 



// $os = array("Mac", "NT", "Irix", "Linux","hola");
$os = "Mac , hola";
// if (in_array("Irix", $os)) {
//     echo "Got Irix";
// }
if (str_contains('1,2,3,4,5', '6')) { 
    echo 'true';
}


$string = 'The lazy fox jumped over the fence';

if (str_contains($string, 'lazy')) {
    echo "The string 'lazy' was found in the string\n";
}
?>