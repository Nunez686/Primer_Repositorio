<?php
/* CBTIS 89
   Programa que almacena datos sobre electrodomesticos de una compañia
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
   $Electrodomesticos=array("Lavadora"=>'5,550','Secadora'=>'7,844','Refrigerador'=>'12,780','Microondas'=>'2,220','Television'=>'3,300','Lavavajillas'=>'6,400');

   echo "** ELECTRODOMESTICOS NUÑEZ**","<br>","<br>";
   foreach ($Electrodomesticos as $Electrodomesticos=> $precio) 
      {echo "El precio de  ".$Electrodomesticos. " es: ".$precio;
   echo "<br>","<br>";
   }
?>