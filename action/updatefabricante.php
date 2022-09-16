<?php
require('../layout.php');

// importar el archivo de conexion
    include('../connection/connection.php');

    $phpId = $_POST['inputId'];
    $phpNombre = $_POST['inputNombre'];

    $updateFabricante = "UPDATE fabricante SET nombre = '$phpNombre' WHERE codigo = '$phpId'";

    $resultado = mysqli_query($connection, $updateFabricante);

    header('location: ../fabricantes.php')

?>