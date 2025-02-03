<?php
    
    $nombre = "Ivan";
    $apellido = "Perez";
    $lugar = "Londres";
    $nacimiento = "1999";
    $texto = 'Mi nombre es ';
    $date = date("Y");
    $edad = $date - $nacimiento;

    echo $texto .$nombre. ' ' .$apellido. ' y nacio en ' .$lugar. ' Tengo '.$edad. ' anos';
    $datos = [];
    $datos['nombre'] = $nombre;
    $datos['apellido'] = $apellido;
    $datos['lugar'] = $lugar;
    $datos['edad'] = $edad;
    $datos['texto'] = $texto;
    echo '<br>'.$datos['texto'].$datos['nombre']. ' ' .$datos['apellido']. ' y nacio en ' .$datos['lugar']. ' Tengo '.$datos['edad']. ' anos';
?>

    
    