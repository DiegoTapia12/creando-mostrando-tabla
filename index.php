<?php

require 'database.php';

$usuario = $conn->query('SELECT * FROM usuarios');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../creando-mostrando-tabla/assets/css/style.css">
    <title>creando tabla y mostarndola en un pagina</title>
</head>

<body>
    <main>
        <div class="container-fluid">

            <form class="row" method="POST" action="agregar.php">
                <h2>AGREGANDO USUARIO</h2>
                <div class="col">
                    <label for="nombre" class="form-label">nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required />
                </div>
                <div class="col">
                    <label for="" class="form-label">apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="" />
                </div>
                <div class="col">
                    <label for="" class="form-label">cdi</label>
                    <input type="text" class="form-control" name="cdi" id="cdi" aria-describedby="helpId" placeholder="" />
                </div>
                <div class="col">
                    <label for="" class="form-label">n_telefono</label>
                    <input type="text" class="form-control" name="n_telefono" id="n_telefono" aria-describedby="helpId" placeholder="" />
                </div>
                <br><br><br><br>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">cdi</th>
                        <th scope="col">n_telefono</th>
                    </tr>
                </thead>
                <?php foreach ($usuario as $row) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['cdi'] ?></td>
                            <td><?php echo $row['n_telefono'] ?></td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </main>
</body>

</html>