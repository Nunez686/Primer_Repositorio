<?php
/* CBTIS 89 
P20Array2.php 
   Programa que almacena diversos datos en un arreglo y posteriormente los imprime por dedio de um ciclo for
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
$nombre = "Ana";
$array = array(1,2,3, "casa", $nombre
);
//Se obtiene el numero de los elementos
$longuitud = count($array);
//Recorre todos los elementos
for($i=0; $i<5; $i++)
{//Se obtiene   el valor de cada elemento
echo $array [$i];
echo "<br>";
}
?>