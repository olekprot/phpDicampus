<?php
$host = "localhost";
$usuario = "root";
$password = "root";
$database = "tienda_zaya";

$conn = new mysqli($host, $usuario, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}





?>