<?php


//Funciones reutilizables sugeridas por PharException

const DEBUG = true;


function debugTexto($texto){
    if(DEBUG){
        echo '<div clas="alerta">$texto</div>'
    }
}
// debugTexto('Se ha cargado el apartado FOOTER');





insertar('cabecera');
insertar('pie');

insertar('header');
insertar('footer');

insertar('aside');

insertar('cosas.php');

//especifica la carpeta donde estarán los fragmentos a incluir (includes)
const RUTA_BLOQUES ='inc/';

function insertar($elemento){
    switch ($elemento) {
        case 'cabecera':
            case 'header':
            $archivo='_header.php'
            break;
        case 'pie':
        case 'footer':
            $archivo='_footer.php'
            break;
        case 'aside':
            $archivo='_aside.php'
            break;
    
        default:
            $archivo = $elemento;
            break;
    }

    include RUTA_BLOQUES.$archivo;
}


function cabecera(){ ri_header()}
function pie(){ ri_footer()}

function _cabecera(){ ri_header()}
function _pie(){ ri_footer()}

function ri_header(){
    include RUTA_BLOQUES.'header.php';
}
function ri_footer(){
    include RUTA_BLOQUES.'footer.php';
}
