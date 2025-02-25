<?php require "inc/_config.php"?>
<?php $titulo= "Insertar Alumno Nuevo en la Base de 
datos"?>
<?php include "inc/_header.php"?>

<section id="agregar">
    <h2>Agregar Nuevo Alumno</h2>
    <form action="_insertar_alumno.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="fecha_nacimiento">Fecha de acimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto">
        
        <label for="descripcion">Description:</label>
        <input type="text" id="descripcion" name="descripcion">

        <button type="submit">Insertar Alumno</button>
    </form>
</section>

<?php include "inc/_footer.php"?>