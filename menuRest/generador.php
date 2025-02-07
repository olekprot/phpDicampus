<?php
    $archivoJson = 'menu.json';
    
    $contenidoJson = file_get_contents($archivoJson);
    $menu = json_decode($contenidoJson, true);
   
    foreach ($menu['menu'] as $index => $plato) {
        echo '<div class="plato">';
        echo '<img src="' . $plato['foto'] . '" alt="' . $plato['nombre'] . '">';
        echo '<h2>' . $plato['nombre'] . '</h2>';
        echo '<p><strong>Precio:</strong> ' . $plato['precio'] . '</p>';
        echo '<p><strong>Peso:</strong> ' . $plato['peso'] . '</p>';
        echo '<button onclick="toggleIngredientes(' . $index . ')">Ingredientes</button>';
        echo '<div class="ingredientes" id="ingredientes-' . $index . '">';
        echo '<p><strong>Ingredientes:</strong> ' . implode(', ', $plato['ingredientes']) . '</p>';
        echo '</div>';
        echo '</div>';
    }

    
?>