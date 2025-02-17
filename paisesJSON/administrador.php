
<?php $t='Admin';?>
<?php include_once 'component/header.php'; ?>

<!-- HTML -->
<div id="feedback-form">
  <h2 class="header">Anadir el pais nuevo</h2>
    <div>
        <form action="administrador.php" method="get">
            <label for="">Nombre: 
                <input type="text" name="name">
            </label>
            <label for="">Populacion: 
                <input type="text" name="population">
            </label>
            <label for="">Area: 
                <input type="text" name="area">
            </label>
            <label for="">Capital: 
                <input type="text" name="capital">
            </label>
            <label for="">Bandera: 
                <input type="text" name="flag">
            </label>
            <input type="submit" value="Guardar pais" name="submitButton">
        </form>
    </div>
</div>
<!-- Fin HTML -->
<?php
    if (isset($_GET['submitButton'])) {
        //Cargador datos del JSON
        $nombre = $_GET['name'];
        $populacion = $_GET['population'];
        $area = $_GET['area'];
        $capital = $_GET['capital'];
        $bandera = $_GET['flag'];

        if ($nombre !== strip_tags($nombre)) {
            $nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
            echo 'vdshjkgsdhdgs';
        }   else {
            echo '123';
        }
      
       //Cargar datos que recogemos de los inputs
        $miArray = cargadorJSON('assets/datos/paises.json');
        //Anadir al array los datos
        $miArray['countries'][]= array('name' => $nombre, 'population' => $populacion, 'area' => $area, 'capital' => $capital, 'flag' => $bandera);
        //Codificar el array en JSON
        $miJSON = json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        //Guardar new JSON
        file_put_contents('assets/datos/paises.json' ,$miJSON);
    }

?>
<?php include_once 'component/footer.php'; ?>


