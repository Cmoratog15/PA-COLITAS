<?php 
    //Datos de la conexión:

    $clave = ""; 
    $usuario = "root"; 
    $nombreBD = "protectora_animales_colitas"; 


    //Estructura de control de errores:

    try{
        //Cadena de conexión a la Base de Datos
        $bd = new PDO('mysql:host=localhost; dbname=' . $nombreBD, $usuario, $clave,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    }catch (Exception $e){ //$e es una variable de error
        echo "Problema al conectar con la Base de Datos $e";
    }
?>