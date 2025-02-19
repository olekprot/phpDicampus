



<?php 
if (isset($_GET['submit'])) {
    $host = $_GET['host'];
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];
    $nombre = $_GET['nombre'];

    $conn = new mysqli($host, $usuario, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      // Create database
      $sql = "CREATE DATABASE myDB";
      if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
      } else {
        echo "Error creating database: " . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>

    <form action="" method="get">
        <label for="">Servidor Db:
            <input type="text" id="host" name="host" value="localhost" required>
        </label>
        <label for="">Usuario DB:
            <input type="text" id="usuario" name="usuario" value="root" required>
        </label>Password DB:
            <input type="text" id="password" name="password" value="root" required>
        </label>
        <label for="">Nombre DB:
            <input type="text" id="nombre" name="nombre" required>
        </label>

        <input type="submit" value="Crear BD">
    </form>
    <a href="index.php"> Volver</a>
</body>
</html>