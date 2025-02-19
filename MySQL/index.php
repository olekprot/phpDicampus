<?php
/*Connexion a la base de datos MySQL*/
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "oleksii";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nombre, area, capital FROM paises";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "nombre: " . $row["nombre"]. " - Area: " . $row["area"]. " " . $row["capital"]. "<br>";
  }
} else {
  echo "0 results";
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
    <h1>Hola</h1>
</body>
</html>