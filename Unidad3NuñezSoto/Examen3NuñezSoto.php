<?php
/* CBTIS 89 
   Programa que almacena el nombre de cuatro personas en un arreglo y en otro arrreglo multidimensionada llamado $Calificaciones almacena las calificaciones de cad uno de ellos por medio de filas y columnas.
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
   $Alumnos = array("Luz","Fer","Ian","Ale");
   $Calificaciones= array(
  array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));
   $Promedio=array();
   $Status=array();
echo "NORMAL";
echo "<br>";
// Imprimir la matriz en su forma original
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $Calificaciones [$i][$j] . " ";
        $Promedio[$i]=$Calificaciones[$j]. " ";
    }
    echo "<br>";
}
echo "<br>";





 
   $Calificaciones = array (
  array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));
echo "Calificaciones";
echo "<br>";
// Imprimir la matriz en su forma original
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $Calificaciones[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>";
?>