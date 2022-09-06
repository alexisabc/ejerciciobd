<?php

include('../connection/connection.php');

$phpcodigo_fabricante = $_GET['id'];

$delateFabricante="DELETE FROM fabricante WHERE codigo = '$phpcodigo_fabricante'";

$resultado = mysqli_query($connection,$delateFabricante);

header ('location:../fabricantes.php')

?>