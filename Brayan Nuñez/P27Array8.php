 <?php
   /*CBTIS 89 
   Programa que calcula numeros del 1-100
   Brayan Nuñez
   3ºA Programaciòn Matutino
   */

$numeros = range(1, 100);
for ($i = 0; $i <count($numeros); $i++){
	if ($numeros [$i] %2 == 0){
	echo $numeros [$i]. "<br>";

	}
}
?>   