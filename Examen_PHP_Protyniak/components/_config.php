<?php 


    //Para DEBUG
    $debug = false;
    function debug($message){
        global $debug;
        if($debug){
            echo $message . "\n";
        }
    }

    /*Imprimir mi JSON*/
    function debugPrint_r($array){
        global $debug;
        if ($debug){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    }
    function cargadorJSON($archivo) {
        if(file_exists($archivo)) {
            $miJSON = file_get_contents($archivo);
            $miArray = json_decode($miJSON, true);
            return $miArray;
        } else {
            echo 'Donde ta el mi archivo?';
        };
    }
?>