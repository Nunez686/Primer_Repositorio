<?php
/* CBTIS 89 
   Programa que almacena numeros positivos y negativos, despues que los separe en dos columnas en diferentes
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */

// Almacena datos en un arreglo
$arraynumeros = array(-4, 8, 17, -11, -3, 1, 
                      20, -30, 21, 50, -73, 7,
                      -10, -8);

$arraypositivos = array();
$arraynegativos = array();
$suma_positivos = 0;
$suma_negativos = 0;

// Recorrer los arreglos de nombres y edades para clasificar a las personas
for ($i = 0; $i < count($edad); $i++) {
    if ($edad[$i] < 18) {
        // Persona menor de 18 años
        $grupo1[$i] = 1;  // Colocar 1 en Grupo1
    } elseif ($edad[$i] >= 18 && $edad[$i] <= 49) {
        // Persona entre 18 y 49 años
        $grupo2[$i] = 1;  // Colocar 1 en Grupo2
    } else {
        // Persona de 50 años o más
        $grupo3[$i] = 1;  // Colocar 1 en Grupo3
    }
}

// Imprimir todos los resultados juntos

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