<?php 
//Continuamos la sesion
session_start();
//Cerramos la sesión
session_destroy();
//Enviamos al usuario al login
header("Location: ../Login/login.php");
?>