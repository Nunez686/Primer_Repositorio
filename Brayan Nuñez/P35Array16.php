<?php
/* CBTIS 89 
P34Array15.php
   Programa que almacena datos en dos arreglos posteriormente realiza operaciones entre ellos y coloca los resultados en otros arreglos (suma,resta,multiplicacion y division), al final imprime el contenido de todos los arreglos
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
$array1 = array(10,20,30,40,50);
$array2 = array(3,7,6,15,18);
$arraysuma = array();
$arrayresta = array();
$arraymulti = array();
$arraydivi = array();

$longuitud = count($array1);

for($i=0; $i<$longuitud; $i++)
   { $arraysuma[$i] = $array1[$i]+$array2[$i];
   $arrayresta[$i] = $array1[$i]-$array2[$i];
   $arraymulti[$i] = $array1[$i]*$array2[$i];
   $arraydivi[$i] = $array1[$i]/$array2[$i];
   }

   echo "SUMA ENTRE ARREGLOS <br>";
   for($i=0; $i<$longuitud; $i++)
      {echo $array1[$i]." - ".$array2[$i]." = ".$arrayresta[$i];
echo "<br>";
}