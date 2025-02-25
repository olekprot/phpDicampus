<?php include "components/_config.php"; ?>
<?php include "components/_header.php"; ?>


        <div class="iphone-x" id="imprimirPais">
            <i>Speaker</i>
            <b>Camera</b>
            <a href="index.php"><button class="button -sun">&#8656;</button></a>
            <div id="feedback-form">
                <h2 class="header">Add New User</h2>
                <div>
                    <form action="components/_addAlumno.php" method="get">
                        <input type="text" name="nombre" placeholder="Nombre"></input>
                        <input type="text" name="edad" placeholder="Año de nacimiento(ex.2000)"></input>
                        <input type="email" name="email" placeholder="Email"></input>
                        <input type="text" name="image" placeholder="Logo"></input>
                        <input class="button -sun" type="submit" value="Guardar alumno" name="submitButton">
                    </form>   
                </div>
            </div> 
        </div>
        
<?php include "components/_footer.php"; ?>



