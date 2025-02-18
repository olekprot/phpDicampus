<?php require '_config.php';?>

<?php
    session_start();
    if(_logueando()) {
        header ('Location: laboratoriodelmal.php');
        $logeado = true;
    } else {
        header ('Location: expulsando.php');
        $logeado = false;
    }



?>

