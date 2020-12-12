<?php
$estacion = "invierno";


switch ($estacion) {
case 'primavera':
    echo "bienvenidos a la primavera";
break;
case 'invierno':
    echo "hace frio";
break;

default:
echo "en que estacion estamos??";
break;

}
/**
 * estructura while
 */

 $x = 1;
while($x <= 5) {
    echo "El numero es: $x <br>"; // codigo a ejecutar
    $x++; // Incremento de la va
    }
echo "<br>";
/**
 * Estructura do while
 */

$y =1;
do {
echo "El numero es: $y <br>";
$y++;
} while ($y <= 10);