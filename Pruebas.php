<?php 


//   $interes = '';
//   $num_pat = count($_POST['interes']);
//   $current = 0;
//   foreach ($_POST['interes'] as $key => $value) {
//          if ($current != $num_pat-1)
//                 $interes .= $value.',';
//          else
//                 $interes .= $value.'';

//          $current++;
//   }


// echo $interes;

$array_equipo = array('portero', 'laterales', 'centrales', 'mediocentros', 'interiores', 'delanteros');
 
$cadena_equipo = implode(",", $array_equipo);
echo "El equipo separaro por ';' es el siguiente: " .$cadena_equipo;
 
$cadena_equipo2 = implode($array_equipo);
echo "<br><br>El equipo sin parámetro string es el siguiente: " .$cadena_equipo2;

?>