<?php
    include "_config.php";
    if (isset($_GET['submitButton'])) {
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        $email = $_GET['email'];
        $image = $_GET['image'];
      
        $sql = "INSERT INTO alumnos (nombre, edad, email, image) VALUES ('$nombre', '$edad', '$email', '$image')";
        mysqli_query($conn, $sql);
        echo "Datos enviados";
        echo '<a href="../index.php">Volver</a>';

        mysqli_close($conn);
    }


?>