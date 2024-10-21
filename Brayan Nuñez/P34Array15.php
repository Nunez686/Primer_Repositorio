<?php
/* CBTIS 89 
P34Array15.php
   Programa que convierte los datos de un arreglo en una cadena de texto, y de forma cntraria es decir convierte yna cadena de texto a elementos dentro de un arreglo.
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */

   //Almacena datos en un arreglo
   $arraydatos = ["Karina","Rosales","Orozco"];

   // Convierte un array en una cadena de texto 
   $string = implode(" ", $arraydatos);
   echo "Cadena de texto <br>";
   echo $string;
   echo "<br>","<br>";

//Cadena de texto para separar
$cadena = "tercero de programacion matutino";

//Convierte una cadena de texto en un array
$array = explode(" ",$cadena);
$longuitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
//Imprime los elementos del arreglo
for($i=0; $i<$longuitud; $i++)
{//se obtiene el valor de cada elemento 
   echo $array [$i];
   echo "<br>";
}