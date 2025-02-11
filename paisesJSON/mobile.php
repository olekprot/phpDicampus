<?php $t='Mobile';?>
<?php require 'component/config.php'; ?>
<?php include_once 'component/header.php'; ?>

<div class="container_grande">
    <div class="mobile_container">
        <?php
        $archivo = 'assets/datos/paises.json';
        $miArray = cargadorJSON($archivo);
        echo '<ul class="listaDePaisesMobile1">';
        foreach($miArray['countries'] as $miPais) {
            echo '<button class="button_mobile_list" name="submitButton_mobile" value="'.$miPais['name'].'" onclick="addPais()"> 
                    <li class="mobile_paises"> 
                        <img src="'.$miPais['flag'].'">
                    </li> 
                </button>';
        };
        echo '</ul>';
        ?>
    </div>
    <div class="mobile_container" id="imprimirPais"></div>
</div>

<?php include_once 'component/footer.php'; ?>