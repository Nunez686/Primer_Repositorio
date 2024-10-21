<?php
/* CBTIS 89 
   Programa que almacena datos en un arreglo y posteriormente los imprime
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
   $equipo = array("Portero"=>'Julio','Defena'=>'Diego','Medio'=>'jair','Delantero'=>'Rafa');

   echo "**SELECCION NACIONAL**","<br>","<br>";
   foreach ($equipo as $posicion=> $jugador) 
      {echo "El jugador".$jugador. "es el ".$posicion;
   echo "<br>","<br>";
   }
?>