<?php
/* CBTIS 89 
   P40Array20.php
   Programa que almacena en un arreglo llamado
   $Compras el valor de 6 compras,
   posteriormente en otros arreglos se debe
   almacenar informaciòn de acuerdo a las 
   siguientes condiciones:
   El contenido del arreglo $Descuentos se
   llenàra de la siguiente manera:
   Compra menor 300 = 0
   Compra mayor 300 y menor o igual 1000 = 10%
   Compra mayor 1000 y menor o igual 2500 = 15%
   Compra mayor 2500 y menor o igual 5000 = 20%
   Compra menor 5000 = 25%.
   En el arreglo $Total se coloca la diferencia 
   entre la compra y el descuento y en arreglo
   $porcentaje colocar el porcentaje que se le 
   aplicò de descuento
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */
   
   $Compras = array(800, 2700, 1900, 150, 7600, 1000);
   $Descuentos = array();
   $Total = array();
   $Porcentaje = array();

for ($i = 0; $i < 6; $i++) {

    if ($Compras[$i] < 300) {
        $Descuentos[$i] = 0;  
        $Porcentaje[$i] = 0;
    } elseif ($Compras[$i] >= 300 && $Compras[$i] <= 1000) {
        $Descuentos[$i] = $Compras[$i] * 0.10;  
        $Porcentaje[$i] = 10;
    } elseif ($Compras[$i] > 1000 && $Compras[$i] <= 2500) {
        $Descuentos[$i] = $Compras[$i] * 0.15;  
        $Porcentaje[$i] = 15;
    } elseif ($Compras[$i] > 2500 && $Compras[$i] <= 5000) {
        $Descuentos[$i] = $Compras[$i] * 0.20;  
        $Porcentaje[$i] = 20;
    } else {
        $Descuentos[$i] = $Compras[$i] * 0.25;  
        $Porcentaje[$i] = 25;
    }

  $Total[$i] = $Compras[$i] - $Descuentos[$i];
}
   echo "<br>";
echo "Compras", "Descuentos", "Total", "Porcentaje"."<br>";
for ($i=0;$i<6;$i++)
        {echo $Compras[$i]."-----". $Descuentos[$i]."-----". $Total[$i]."-----".$Porcentaje[$i], "<br>";}


?>