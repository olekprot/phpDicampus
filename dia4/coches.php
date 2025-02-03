<?php
    include 'coches.json';
    
    $datos = json_decode(file_get_contents('coches.json'), true);
    echo '<pre>';
    print_r($datos);
    echo '</pre>';
?>