<?php
/**  
 * un array almacena multiples valores eb una variable.
 * en PHP la funcion array() es utilizada para crear un arreglo
 */

 $frutas = array("mango","manzana","perea","naranja");
 echo "compra" .$frutas[0].", ".$frutas[2]. "y" . $frutas[3];
 echo "<br>";


 /**
  * obtener la longitud de un arreglo con la funcion count()
   */

   echo "longuitud:" . count($frutas);
   echo "<br>";

  /**
   * arreglos indexados en }php
   * los indices se pueden asignar automaticamente o de manera manual
   */

   // asignacion automatica
   $animales = array('perro','gato','conejo');
   var_dump($animales);
   echo "<br>";

   //asignacion manual
   $colores[0] = "rojo";
   $colores[1] = "azul";
   $colores[2] = "verde";
   var_dump($colores);
   echo "<br>";

   /**
    * iterar un arreglo
    */

    $idiomas = array(
        "español",
        "ingles",
        "aleman",
        "frances",
        "portugues",
        "italiano",
    );
    $idiomasLength = count($idiomas);
    echo "los odiomas son: <br>";
    for ($x=0; $x <$idiomasLength; $x++) {
        echo $idiomas[$x];
        echo "<br>";
            
    }
/**
 * arreglo asociativo
 */

 $edad = array(
     "Pedro"=> 25,
     "Juan"=> 26,
     "Alejandro"=>30
 );
 echo "Juan tiene" . $edad["Juan"] . "años";
 echo "<br>";

 /**
  * iterar un arreglo asociativo
  */

  foreach ($edad as $key => $value) {
      echo "Llave= " . $key . ", valor = " . $value;
      echo "<br>";
}

/**
 * iterar uarray multidimencional
 */
$cars = array (
    array("volvo",22,18),
    array("izuzu",15,13),
    array("VW golp",5,2),
    array("Land Rover",17,15)
);

echo $cars[0][0].": en almacen: ".$cars[0][1]." vendidos: ".$cars[0][2].".<br>";
echo $cars[1][0].": en almacen: ".$cars[1][1]." vendidos: ".$cars[1][2].".<br>";
echo $cars[2][0].": en almacen: ".$cars[2][1]." vendidos: ".$cars[2][2].".<br>";
echo $cars[3][0].": en almacen: ".$cars[3][1]." vendidos: ".$cars[3][2].".<br>";

/** . itetar  un array multidimencional
 * 
*/
    for ($row = 0; $row < 4; $row++){
    echo "<p><b>Numero de fila $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col <3; $col++) {
echo "<li>". $cars[$row][$col]."</li>";
    }
}












