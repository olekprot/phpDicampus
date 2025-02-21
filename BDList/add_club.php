<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "oleksii";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$nombre = $_GET['nombre'];
$link = $_GET['link'];
$ano =$_GET['ano'];

$sql = "INSERT INTO clubs (nombre, link, ano) VALUES ('$nombre', '$link', '$ano')";
mysqli_query($conn, $sql);
echo "Datos enviados";
echo '<a href="index.php">Volver</a>';

mysqli_close($conn);


?>


