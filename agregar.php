<?php

require 'database.php';

$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['cdi']) || empty($_POST['n_telefono'])) {
        $error = "Los campo esta vacio";
    } else {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cdi = $_POST['cdi'];
        $n_telefono = $_POST['n_telefono'];

        $statement = $conn->prepare("INSERT INTO usuarios(nombre, apellido, cdi, n_telefono) VALUES (:nombre, :apellido, :cdi, :n_telefono)");
        $statement->execute([':nombre' => $nombre, ':apellido' => $apellido, ':cdi' => $cdi, ':n_telefono' => $n_telefono]);

        header('Location: index.php');
    }
}
