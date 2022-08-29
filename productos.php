<?php require ('layout.php');?>
<!doctype html>
<html lang="en">

<head>
<title>Productos</title>
</head>

<body>
    <div class="container">

        <br>

        <form action="action/insertproducto.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre Producto</label>
                <input type="text" name="inputNombre" class="form-control">
                <label class="form-label">Precio</label>
                <input type="text" name="inputPrecio" class="form-control">
                <label class="form-label">Codigo Fabricante</label>
                <input type="text" name="inputCodigoFabricante" class="form-control">
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
        </form>

        <br>

            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Codigo Fabricante</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('connection/connection.php');
                    $consulta = "SELECT producto.codigo, producto.nombre, precio, fabricante.nombre as codigo_fabricante FROM producto INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo";
                    $resultado = mysqli_query($connection, $consulta);
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $fila["codigo"] ?></th>
                            <td><?php echo $fila["nombre"] ?></td>
                            <td><?php echo $fila["precio"] ?></td>
                            <td><?php echo $fila["codigo_fabricante"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
