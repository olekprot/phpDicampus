<?

$debug=true;

//Array con elemntos a utilizar
$menu =[
    // texto del link          // url del link               // title                               // target     // class
    ['txt'=>'Home',           'Lkn'=>'webPHP.php',            'title'=>'Ir al Inicio',               'tar'=>0,   'cls'=>'elemento'],
    ['txt'=>'La galaxia hoy', 'Lkn'=>'blog.php',             'title'=>'Novedades Astronómicas',     'tar'=>0,   'cls'=>'elemento'],
    ['txt'=>'Nosotros',       'Lkn'=>'nosotros.php',         'title'=>'Sobre Nosotros',             'tar'=>0,   'cls'=>'elemento'],
    ['txt'=>'Calendario',     'Lkn'=>'calendario.php',       'title'=>'Calendario Astronómico',     'tar'=>0,   'cls'=>'elemento'],
    ['txt'=>'Facebook',       'Lkn'=>'https://facebook.com', 'title'=>'Nuestro Facebook',           'tar'=>1,   'cls'=>'elemento facebook'],
    ['txt'=>'Contacto',       'Lkn'=>'contacto.php',         'title'=>'Contacta con los Astros',    'tar'=>0,   'cls'=>'elemento']
];
$footerMenu = [
    ['txt'=> 'Politica de cookies',        'lkn' => '#',       'tar' => 1,    'cls' => 'elemnto'],
    ['txt'=> 'Politica de privaciad',      'lkn' => '#',       'tar' => 1,    'cls' => 'elemnto'],
    ['txt'=> 'Aviso Legal',                'lkn' => '#',       'tar' => 1,    'cls' => 'elemnto']
];
$datos = [
    // Configuración general
    'tituloSite'      => 'AstraLavista',
    'descripcion'     => 'Grupo de astrónomos entusiastas en Asturias, explorando el cosmos desde la tierra.',
    'lang'           => 'es',
    'autor'          => 'Miguel Esteban Corporation International',
    'charset'        => 'UTF-8',
    'timezone'       => 'Europe/Madrid',

    // Rutas de archivos y directorios
    'baseURL'        => 'https://www.astralavista.com/',
    'imgFolder'      => 'assets/img/',

    // Metaetiquetas para SEO
    'metaKeywords'   => 'astronomía, astrofotografía, planetas, cosmos, telescopios, observaciones',
    'metaDescription'=> 'AstraLavista',
    // Redes sociales
    'socials' => [
        'facebook'  => 'https://facebook.com/AstraLavistaAsturias',
        'twitter'   => 'https://twitter.com/AstraLavista',
        'instagram' => 'https://instagram.com/AstraLavistaAsturias',
        'youtube'   => 'https://youtube.com/AstraLavista',
        'tiktok'    => 'https://tiktok.com/@AstraLavista'
    ],

    // Datos de contacto
    'contacto' => [
        'email'     => 'contacto@astralavista.com',
        'telefono'  => '+34 600 123 456',
        'direccion' => 'C/ Observatorio, 12, Oviedo, Asturias, España',
        'mapa'      => 'https://maps.google.com/?q=C%2F+Observatorio,+12+Oviedo+Asturias+España'
    ],

   
    // Parámetros visuales
    'logo'          => 'assets/img/logo.png',
    'logoFooter'    => 'assets/img/logo-footer.png',
    'favicon'       => 'assets/img/favicon.ico',

];


/*Constructor de HEADER*/
function constructorMenu($menu) {
    global $menu;
    echo '<nav>
            <ul>';
    foreach ($menu as $item) {
        echo  ' <li class="' . $item['cls'] . '">
                    <a href="' . $item['Lkn']. '"; target="_blanck">'.$item['txt'].'</a>
                </li>';
               };
        echo  '</ul>
    </nav>';
    };


/*Constructor de FOOTER*/
function constructorFooter($footerMenu){
    global $footerMenu;
    echo '<nav>
            <ul>';
    foreach ($footerMenu as $item) {
        echo  ' <li class="' . $item['cls'] . '">
                    <a href="' . $item['lkn']. '" target="_blank ">'.$item['txt'].'</a>
                </li>';
               };
        echo  '</ul>
    </nav>';
}

/*Constructor del telefono*/
/*Format +34 600 500 400*/
function convertorTelefono($numero) {
    $numeroFormateado = str_replace([' ', '+'],'', $numero);
    

    return $tel;
    };

?>