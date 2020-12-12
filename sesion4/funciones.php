<?php

declare(strict_types=1);
/**
 * declarar funciones en PHP
 */
function Saludo()
{
    echo "hola ¿como estan?";
}
Saludo();
echo "<hr>";
/**
 * funcion con parametros
 */
function Suma(int $a, int $b){
$resultado = $a + $b;
return $resultado;
    

}
echo (Suma(5,7));