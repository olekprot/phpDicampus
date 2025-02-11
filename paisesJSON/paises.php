<?php $t='Paises';?>
<?php require 'component/config.php'; ?>
<?php include_once 'component/header.php'; ?>

<?php
    

    $archivo = 'assets/datos/paises.json';
    //debugPrint_r(cargadorJSON($archivo)); /*Para Imprimir mi JSON en formato normal*/

    $miArray = cargadorJSON($archivo);
    echo '<ul class="listaDePaises">';
    foreach($miArray['countries'] as $miPais) {
        echo '<li class="paises"> 
                <h2>'.$miPais['name'].'</h2>
                <p> Populacion: '.$miPais['population'].'</p>
                <p> Area: '.$miPais['area'].'</p>
                <p> Capital: '.$miPais['capital'].'</p>
             </li>';

    };
    





?>

<?php include_once 'component/footer.php'; ?>