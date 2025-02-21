<?php
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

$sql = "SELECT * FROM clubs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<ul>'; // Start the unordered list
    while($row = $result->fetch_assoc()) {
      echo '<li class="paises">
              <h2>'.$row['nombre'].'</h2>
              <img src="'.$row['link'].'" alt="Club Image">
              <p>Year: '.$row['ano'].'</p>
           </li>';
    }
    echo '</ul>'; // End the unordered list
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
    <title>Football</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="formEnviar.php" >Add new club</a>

    
    



</body>
</html>