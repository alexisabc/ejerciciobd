<?php

include('../connection/connection.php');

$phpnombre = $_GET['id'];

$delateproducto="DELETE FROM producto WHERE codigo = '$phpnombre'";

$resultado = mysqli_query($connection,$delateproducto);

header ('location:../productos.php')

?>