$<?php
/**
 * PHP soporta los siguienttes tipos de datos:
 * string
 * interger
 * Float
 * Boolean
 * Array
 * OBjet
 * NULL
 * resource
 */
// String
$saludo= "hola";
echo $saludo." Bienvenidos a".'PHP';
echo "<br>";


// integer
echo "<hr>";
$x = 2020;
var_dump($x);
echo "<br>";

// Float
echo "<hr>";
$y = 10.5672;
var_dump($y);
echo "<br>";

//Bolean
echo "<hr>";
$verdadero = true;
$falso = false;
var_dump($falso);
echo "<br>";

// array
echo "<hr>";
$colores=array("rojo","verde","azul","negro","blanco");
var_dump ($colores);
echo "<br>";

//objet
echo "<hr>";
class carro{
public $color;  //atributos
public $modelo;

public function_construct($color,$modelo){
$this->color = $color;
$this->modelo = $modelo;
}
public function mensaje(){
    return "mi carro es un " . $this->modelo . " " . $this->color;
   }
public function detenerse();{
    return"deteniendose...";
}

}

//objeto 1
$micarro=new carro("rojo","chevrolet");
echo $micarro->mensaje();
echo "<br>";
//objeto 2
$micarro = new carro("blanco","toyota"); 
echo $micarro->mensaje();
echo "<br>";

//NULL
$valor =4;
$valor = NULL; // es diferente a decir $valor = "";

// Resoure
/**
 * Recursos externos a PHP
 * Dases de Datos
 * Archivos
 * Funciones
 * Etc.
 */
}