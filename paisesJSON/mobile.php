<?php $t='Mobile';?>
<?php require 'component/config.php'; ?>
<?php include_once 'component/header.php'; ?>

<div class="container_grande">
    <div class="mobile_container">
        <?php
        $archivo = 'assets/datos/paises.json';
        //debugPrint_r(cargadorJSON($archivo)); /*Para Imprimir mi JSON en formato normal*/
    
        $miArray = cargadorJSON($archivo);
        
        echo '<ul class="listaDePaisesMobile1">';
        foreach($miArray['countries'] as $miPais) {
            echo '<button class="button_mobile_list" name="submitButton_mobile"> <li class="mobile_paises"> 
                    <img src="'.$miPais['flag'].'">
                 </li> </button>';
        };
        echo '</ul>';
        
        ?>


    </div>
    <div class="mobile_container">
        <?php 

            if (isset($_GET['submitButton_mobile'])) {
                echo 'skdkjdsgbj';
                $archivo = 'assets/datos/paises.json';
            
                $miArray = cargadorJSON($archivo);
                echo '<ul class="listaDePaisesMobile2">';
                foreach($miArray['countries'] as $miPais) {
                    echo '<li class="paises"> 
                            <h2>'.$miPais['name'].'</h2>
                            <img src="'.$miPais['flag'].'">
                            <p> Populacion: '.$miPais['population'].'</p>
                            <p> Area: '.$miPais['area'].'</p>
                            <p> Capital: '.$miPais['capital'].'</p>
                         </li>';
            
                };
                echo '</ul>';
            }
        
        ?>
    


    </div>
</div>





<?php include_once 'component/footer.php'; ?>