<?php require('../layout.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Editar Producto</title>
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
        $consulta = "SELECT * FROM producto WHERE codigo = '$phpId'";
        // query de conexion  y query de listado
        $resultado = mysqli_query($connection, $consulta);
        // mientras haya algo dentro de table, seguira listado
        $fila = mysqli_fetch_array($resultado)
        ?>

        <form action="updateproducto.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre Producto</label>
                <input type="hidden" name="inputId" value="<?php echo $fila["codigo"] ?>">
                <input type="text" name="inputNombre" value="<?php echo $fila["nombre"] ?>" class="form-control">
                <label class="form-label">Precio</label>
                <input type="text" name="inputPrecio" value="<?php echo $fila["precio"] ?>" class="form-control">
                <label class="form-label">Codigo Fabricante</label>
                <!--select para los nombres de fabricantes-->
                <select name="inputcodigo_fabricante" class="form-select form-select-md" aria-label=".form-select-lg example">


                    <option selected><?php echo $fila["codigo_fabricante"] ?></option>

                    <?php
                    // importar el archivo de conexion
                    include('../connection/connection.php');
                    // variable para listar toda la tabla
                    $consulta = "SELECT * FROM fabricante";
                    // query de conexion  y query de listado
                    $resultado = mysqli_query($connection, $consulta);
                    // mientras haya algo dentro de table, seguira listado
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <option value="<?php echo $fila["codigo"] ?>"><?php echo $fila["nombre"] ?></option>
                    <?php } //cierre del while
                    ?>
                </select>
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