<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="admin.php" method="get">
        <label for="">
            <input type="text" id="nombreNewPlato">
        </label>
        <label for="">
            <input type="text" id="peso">
        </label>
        <label for="">
            <input type="text" id="ingredientes">
        </label>
        <label for="">
            <input type="text" id="precio">
        </label>
        <input type="submit" value="Send"> 
    </form>


    <?php
    if(isset($_GET['nombreNewPlato'])){
        $nombreNewPlato = $_GET['nombreNewPlato'];
        $ingredientes = $_GET['ingredientes'];
        $precioNew = $_GET['precio'];
        $peso = $_GET['peso'];


        array_push($archivoJson['menu'].['nombre'=>$nombreNewPlato, 'ingredientes'=>$ingredientes, 'peso'=>$peso, 'precio' => $precioNew]);
        $contenidoJson = json_encode($archivoJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($archivoJson, $contenidoJson);



    }
       

    
    
    ?>
</body>
</html>