<?php
/* CBTIS 89 
   Programa que almacena y imprime datos de fruta
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
   $fruta= array("manzana"=>'25','mango'=>'40','limon'=>'35','naranja'=>'20');

   echo "** FRUTERIA DEL SUR **","<br>","<br>";
   foreach ($fruta as $fruta=> $precio) 
      {echo "El kilo de ".$fruta. " cuesta ".$precio;
   echo "<br>","<br>";
   }
?>