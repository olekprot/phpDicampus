<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Restaurante</title>
    <style>
        .conteiner {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1{
            text-align: center;
        }
        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .plato {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            width: calc(33.333% - 40px);
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: .5s;
        }
        .plato:hover,
        button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        .plato img {
            max-width: 100%;
            border-radius: 10px;
            aspect-ratio: 1.5/1;
        }
        .plato h2 {
            margin-top: 0;
        }
        button{
            text-align: center;
            width: 70%;
            border: none;
            background-color: tan;
            border-radius: 10px;
            padding: 10px 20px;
            transition: .5s;
        }
        .ingredientes {
            display: none;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="conteiner">
        <h1>Menú del Restaurante</h1>
        <div class="menu">
            <?php include 'generador.php';?>
        </div>
    </div>

    <script>
        function toggleIngredientes(index) {
            var ingredientesDiv = document.getElementById('ingredientes-' + index);
            if (ingredientesDiv.style.display === 'block' || ingredientesDiv.style.display === '') {
                ingredientesDiv.style.display = 'none';
            } else {
                ingredientesDiv.style.display = 'block';
            }
        }
        
</script>
</body>
</html>