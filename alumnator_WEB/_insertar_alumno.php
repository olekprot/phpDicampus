<?php
// Conectar a la base de datos
$conn = mysqli_connect("localhost", "myprotyniac4", "H6f4C2XB", "alumnator1");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$fecha = $_POST['fecha_nacimiento'];
$foto = $_POST['foto'];
$descripcion = $_POST['descripcion'];

// Manejo del archivo subido
$foto = "";
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $ruta_destino = 'assets/img/uploads/';
    if (!is_dir($ruta_destino)) {
        mkdir($ruta_destino, 0777, true);
    }

    $nombre_archivo = basename($_FILES['foto']['name']);
    $ruta_completa = $ruta_destino . $nombre_archivo;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_completa)) {
        $foto = $ruta_completa; // Guardamos la ruta para insertar en la BD
    } else {
        die("Error al subir el archivo.");
    }
}

// Evitar inyección SQL
$nombre = $conn->real_escape_string($nombre);
$apellido = $conn->real_escape_string($apellido);
$curso = $conn->real_escape_string($curso);
$email = $conn->real_escape_string($email);
$fecha = $conn->real_escape_string($fecha);
$foto = $conn->real_escape_string($foto);
$descripcion = $conn->real_escape_string($descripcion);

// Insertar en la base de datos
$sql = "INSERT INTO Alumnos (nombre, apellido,curso,email,fecha_nacimiento, foto, descripcion) VALUES ('$nombre','$apellido','$curso', '$$email','$fecha', '$foto', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    echo "Alumno agregado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
