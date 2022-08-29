<?php require ('layout.php');?>

<!doctype html>
<html lang="en">

<head>
    <title>Fabricantes</title>
</head>

<body>
    <div class="container">

        <br>

        <form action="action/insertfabricante.php" method="POST" >
            <div class="mb-3">
                <label class="form-label">Nombre Fabricante</label>
                <input type="text" name="inputNombre" class="form-control">
            </div>
            <div class="aling-center">
            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        <br>

            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre Fabricante</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('connection/connection.php');
                    $consulta = "SELECT * FROM fabricante";
                    $resultado = mysqli_query($connection, $consulta);
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $fila["codigo"] ?></th>
                            <td><?php echo $fila["nombre"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
