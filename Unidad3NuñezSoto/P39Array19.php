<?php
/* CBTIS 89
   Programa que almacena información de 6 personas y 
   dependiendo de su edad los contabiliza en diversos arreglos de acuerdo
   a las siguientes condiciones:
   Si la persona es menor de 18 años se debe colocar en 1 en el arreglo
   $Grupo1 y en los otros dos colocar un 0.
   Si la persona es menor de 18 y 49 años se debe colocar en 1 en el arreglo
   $Grupo2 y en los otros dos colocar un 0.
   Si la persona es menor de 50 años o más se debe colocar en 1 en el arreglo
   $Grupo3 y en los otros dos colocar un 0.
   Brayan Nuñez
   3°A Programación Matutino */

   $nombre = array("Zaid","Juan","Pedro","Rosi","Pablo","Beto");
   $edad = array(17,30,71,38,12,58);
   $grupo1 = array();
   $grupo2 = array();
   $grupo3 = array();


for ($i = 0; $i < count($edad); $i++) {
    if ($edad[$i] < 18) {
    $grupo1[$i] = 1;  
    } elseif ($edad[$i] >= 18 && $edad[$i] <= 49) {
    $grupo2[$i] = 1;  
    } else {   
        $grupo3[$i] = 1;  
    }
}
echo "Grupo 1 (Menores de 18 años):\n";
foreach ($grupo1 as $index => $value) {
    if ($value == 1) {
  echo $nombre[$index] . " (Edad: " . $edad[$index] . ")\n";
    }
}
echo "<br>";
echo "Grupo 2 (De 18 a 49 años):\n";
foreach ($grupo2 as $index => $value) {
    if ($value == 1) {
 echo $nombre[$index] . " (Edad: " . $edad[$index] . ")\n";
    }
}
echo "<br>";
echo "Grupo 3 (De 50 años o más):\n";
foreach ($grupo3 as $index => $value) {
    if ($value == 1) {
     echo $nombre[$index] . " (Edad: " . $edad[$index] . ")\n";
    }
}
?>