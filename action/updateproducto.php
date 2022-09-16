<?php
require('../layout.php');

// importar el archivo de conexion
    include('../connection/connection.php');

    $phpId = $_POST['inputId'];
    $phpNombre = $_POST['inputNombre'];
    $phpPrecio = $_POST['inputPrecio'];
    $phpCodigo_Fabricante = $_POST['inputcodigo_fabricante'];

    $updateProducto = "UPDATE producto SET nombre = '$phpNombre', precio = '$phpPrecio', codigo_fabricante = '$phpCodigo_Fabricante' WHERE codigo = $phpId";

    $resultado = mysqli_query($connection, $updateProducto);

    header('location: ../productos.php')

?>