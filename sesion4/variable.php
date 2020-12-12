<?php
#declaracion de variables
$txt= "hola todos";
/* los nombres de los variables empiezan con el signo de $
los nombres de las variables deben empezar con una letra o _
no pueden iniciar con un numero y solo pueden contenet caracteres alfanumericos
Los nombres de variables son senciles a mayusculas y minusculas
*/
$x = 5;
$y = 10.5;

 echo $txt;
 echo "<br>";
 echo $x;
 echo "<br>";
 echo $y;
 echo "<br>";
  $a = 5;
  $b = 3;
  echo  "La suma de: ", ($a + $b);
  # alcanse de las variables

  // Global
 
 
 
 
  $c = 5; // variables global
 
  function pruebaGlobal(){
// utilizar n dentri de esta funcion marcara error.
echo "<p> Variable c dentro de la funcion es: $c</p>";
 }
  pruebaGlobal();

echo "variable c fuera de la funcion es: $c</p>";


// local

function pruebaGlobal() {
$z =5; // variable global
 
}
// utilizar n dentro de esta funcion marcara error 
echo "<p> variable z dentro de la funcion es: $z</p>";

}
pruebaGlobal();
echo "variable z fuera de la funcion es:/p>"; 
  }


