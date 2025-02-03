<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            padding-top: 25px
        }
        ul {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        li {
            background-color: tan;
            padding: 10px;
            margin: 10px;
            list-style: none;
            flex: 1 1 250px;
            border-radius: 10px;
        }
        p {
            color: white;
        }
    </style>
</head>
<body>
    <h1>Lista de los coches</h1>
    <ul>
    <?php
    
    $datos = json_decode(file_get_contents('coches.json'), true);

    foreach($datos as $car) {
        echo '<br>';
        echo '<li>';
        echo '<p>Marca: ' . $car['marca'] . '</p>';
        echo '<p>Modelo: ' . $car['modelo'] . '</p>';
        echo '<p>Cilindrada: ' . $car['cilindrada'] . '</p>';
        echo '<p>Velocidad Máxima: ' . $car['velocidad_maxima'] . '</p>';
        echo '</li>';
    }

?>
    </ul>

</body>
</html>


