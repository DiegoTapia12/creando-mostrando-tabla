<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "usuario";

try {
    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
} catch (PDOException $e) {
    die('PDO Connection Error: ' . $e->getMessage());
}
