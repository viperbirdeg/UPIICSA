<?php

function input(){
	return fgets(STDIN);
}
echo "Inserta el primer sumando: \n";
$num1 = input();
echo "Inserte el segundo sumando: \n";
$num2 = input();
echo ("El resultado de la suma de $num1" . " + $num2 es: " . ($num1 + $num2) );
?>