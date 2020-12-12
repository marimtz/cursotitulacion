<?php
/**
 * obtener los datos del formulario
 */
//post 
if (isset ($_POST['nombre'])&& isset($_POST['correo'])){
    $nombre = $_POST['nombre'];
    $nombre = $_POST['correo'];
    
    echo "hola" . $nombre . "tu correo es:" . $correo;
}

//Get
if (isset($_GET['producto'])&&isset($_GET['cantidad'])){
    $producto = $_GET['producto'];
    $cantidad = $_GET['cantidad'];
    
    echo "producto:" . $producto. ",cantidad:"  .$cantidad;
}
