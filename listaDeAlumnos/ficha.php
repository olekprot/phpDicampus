
<?php include "components/_header.php"; ?>

        <div class="iphone-x" id="imprimirPais">
            <i>Speaker</i>
            <b>Camera</b>
            <div>
                <a href="index.php"><button class="button -sun">&#8656;</button></a>
            </div>
            <li class="alumnos"> 
                   <?php include "components/_config.php";
                    
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM alumnos WHERE id = $id";
                        $result = $conn->query($sql);
                    
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<div class="cartaAlumno">
                                      <img src="'.$row['image'].'" alt="logo">
                                      <h2>'.$row['nombre'].'</h2>
                                      <p>Year of birth: '.$row['edad'].'</p>
                                      <p>Email: '.$row['email'].'</p> 
                                      <a href=mailto:'.$row['email'].'>&#128386;</a>
                                  </div>';
                        } else {
                            echo "No results found";
                        }
                    } else {
                        echo "<p class='alert'>¡¡¡No elegiste a un estudiante!!!! ¡¿Qué debería mostrarte?!?!?!?!111</p>";
                    }
                   
                   ?>     
            </li>      
        </div>

<?php include "components/_footer.php"; ?>