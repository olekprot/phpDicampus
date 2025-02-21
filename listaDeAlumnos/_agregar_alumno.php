<?php 



$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$imagen = $_GET['imagen'];
$sql = "INSERT INTO alumnos (nombre, apellido, imagen) VALUES ('$nombre', '$apellido', '$imagen')";








?>