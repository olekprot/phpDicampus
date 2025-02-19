<?php include_once 'components/_header.php';?>

	


<div class="container">
    <div class="movie-card form">
    <h2 class="header-form">Anadir nuevo pelicula</h2>
        <div>
            <form action="newFilm.php" method="get">
                <input type="text" name="titulo" placeholder="Titulo">
                <input type="text" name="ano" placeholder="Año">
                <input type="text" name="pais" placeholder="País">
                <input type="text" name="poster" placeholder="Poster">
                <input type="submit" value="Guardar pelicula" name="submitButtonProtyniak" class="button">
            </form>
        </div>
    </div>
</div>

<!-- Fin HTML -->
<?php
    if (isset($_GET['submitButtonProtyniak'])) {
        //Cargador datos del JSON
        $titulo = $_GET['titulo'];
        $ano = $_GET['ano'];
        $pais = $_GET['pais'];
        $poster = $_GET['poster'];
      
       //Cargar datos que recogemos de los inputs
        $miArray = cargadorJSON('datos/datos.json');
        //Anadir al array los datos
        $miArray['films'][]= array('titulo' => $titulo, 'ano' => $ano, 'pais' => $pais, 'poster' => $poster);
        //Codificar el array en JSON
        $miJSON = json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        //Guardar new JSON
        file_put_contents('datos/datos.json' ,$miJSON);
    }
?>
<?php include 'components/_footer.php';?>