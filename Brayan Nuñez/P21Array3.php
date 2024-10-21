<?php
/* CBTIS 89 
P20Array2.php 
   Programa que almacena los nombres de 6 personas en un arreglo y posteriormente los imprime por medio de un ciclo for
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
$array= array('Angel','Kevin','Pedro','Gera','Ruben','Chulo'
);
//Se obtiene el numero de los elementos
$longuitud = count($array);
//Recorre todos los elementos
for($i=0; $i<6; $i++)
{//Se obtiene   el valor de cada elemento
echo $array [$i];
echo "<br>";
}
?>