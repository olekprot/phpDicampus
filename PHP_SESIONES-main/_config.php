<?php

function _logueando() {
    session_start();
    if(isset($_SESSION['logueado'])) {
        return true;
    } else {
        return false;
    }
}
?>