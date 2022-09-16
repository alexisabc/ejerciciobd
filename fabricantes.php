<?php require ('layout.php');?>

<!doctype html>
<html lang="en">

<head>
    <title>Fabricantes</title>
</head>

<body>
    <div class="container">

        <br>
        <!--inicio de formulario-->
        <form action="action/insertfabricante.php" method="POST" >
            <div class="mb-3">
                <label class="form-label">Nombre Fabricante</label>
                <input type="text" name="inputNombre" class="form-control">
            </div>
            <div class="aling-center">
            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </div>
        </form>
        <!--fin de formularios-->

        <br>
            <!--inicio de la tabla de fabricantes-->
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre Fabricante</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // importar el archivo de conexion
                include('connection/connection.php');
                // variable para listar toda la tabla
                $consulta = "SELECT * FROM fabricante";
                // query de conexion  y query de listado
                $resultado = mysqli_query($connection,$consulta);
                // mientras haya algo dentro de table, seguira listado
                while ($fila= mysqli_fetch_array($resultado)){
                ?>

                        <tr>
                            <th scope="row"><?php echo $fila["codigo"] ?></th>
                            <td><?php echo $fila["nombre"] ?></td>
                            <td><a href="action/deletefabricante.php?id=<?php echo $fila["codigo"] ?>"class="btn btn-danger">Eliminar</a></td>
                            <td><a href="action/editarfabricante.php?id=<?php echo $fila["codigo"] ?>"class="btn btn-warning">Editar</a></td>
                        </tr>
                    <?php }//cierre del while?>
                </tbody>
            </table>
            <!--final de la tabla de fabricantes-->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
