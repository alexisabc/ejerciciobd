<?php require('../layout.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Editar Fabricantes</title>
</head>

<body>
    <div class="container">

        <br>
        <!--inicio de formulario-->
        <?php
        // importar el archivo de conexion
        include('../connection/connection.php');
        //recibir variable
        $phpId = $_GET['id'];
        // variable para mostrar objeto por medio de codigo
        $consulta = "SELECT * FROM fabricante WHERE codigo = '$phpId'";
        // query de conexion  y query de listado
        $resultado = mysqli_query($connection, $consulta);
        // mientras haya algo dentro de table, seguira listado
        $fila = mysqli_fetch_array($resultado)
        ?>

        <form action="updatefabricante.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre Fabricante</label>
                <input type="hidden" name="inputId"  value="<?php echo $fila["codigo"]?>">
                <input type="text" name="inputNombre" value="<?php echo $fila["nombre"]?>" class="form-control">
            </div>
            <div class="aling-center">
                <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
        <!--fin de formularios-->

        <br>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>