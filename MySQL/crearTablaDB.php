<?php


/*Connexion a la base de datos MySQL*/
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "oleksii";
//$table = $_GET['table'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nombre, area, capital FROM paises";

$sql = "CREATE TABLE Nes (
   lastname VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";

if ($conn->query($sql) === TRUE) {
    echo "Table ssss created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


$conn->close();
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Nueva tabla para BD</h1>

    <form action="" method="get">
        <label for="">Nombre de tu tabla:
            <input type="text" id="table" name="table" required>
        </label>
        <input type="submit" value="Crear tabla BD">
    </form>
   

    <a href="index.php"> Volver</a>
</body>
</html>