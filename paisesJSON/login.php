<?php $t='Admnistrador';?>
<?php require 'component/config.php'; ?>
<?php include 'component/header.php'; ?>

<?php

$_SESSION['logeado'] = true;
//Creamos un array con los datos del usuario
$datosUsuario = [
    [
    'user' => 'Richard',
    'pass' => 'mate',
    'mail' => 'richard@rdfitness.com',
    'role' => 'admin'
    ],
    [
    'user' => 'Daniel',
    'pass' => 'Canva',
    'mail' => 'danic@rdfitness.com',
    'role' => 'usuario'
    ]
];




//Comprobamos si el formulario ha sido rellenado (via POST)
if(isset($_POST['usuario']) && isset($_POST['password'])){
    //Guardamos los datos introducidos por el usuario en variables
   $usuarioIngresado  = $_POST['usuario'];
   $passwordIngresado = $_POST['password'];

   //Mostramos esos datos en Debug
   debug("El usuario es: $usuarioIngresado <br>");
   debug("El password es: $passwordIngresado <br>");

    foreach($datosUsuario as $valor){
        if($valor['user']==$usuarioIngresado && $valor['pass']==$passwordIngresado){
            $logeado = true;
            break;
        }
    }

   //Comprobamos si el usuario y la contraseñas son correctos
   
}

else{
    ?>
<div id="feedback-form">
  <h2 class="header">Login</h2>
  <form action="" method="post" class="form-login">
        <label for="usuario">usuario</label>
        <input type="text" name="usuario" id="usuario">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Acceder">
    </form>
</div>
    

<?
}
?>






<?php include_once 'component/footer.php'; ?>