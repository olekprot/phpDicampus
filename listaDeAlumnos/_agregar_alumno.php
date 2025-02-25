<?php include "components/_config.php"; 

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<ul class="listaDeAlumnosContainer">'; // Start the unordered list
    while($row = $result->fetch_assoc()) {
      echo '<li class="listaDeAlumnos">
                <div class="imageAlumno">
                    <img src="'.$row['image'].'" alt="logo">
                </div>   
                <div class="textInfoAlumno">
                    <h2>'.$row['nombre'].'</h2>
                    <p>Year of birth: '.$row['edad'].'</p>
                    <a href="ficha.php?id='.$row['id'].'">See more</a>
                </div>
                
           </li>';
    }
    echo '</ul>'; // End the unordered list
  } else {
    echo "0 results";
  }

?>