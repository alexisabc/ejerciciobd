<?php

//Datos de la DB
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ejercicio';

//Query para la conexión a la BD

$connection = mysqli_connect($hostname, $username, $password, $database);

//Validador de conexión de la BD

if (mysqli_connect_error()){
    echo 'conexión fallida';
}else{
    #echo 'conexión exitosa';
}

?>
