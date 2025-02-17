
<?php $t='LogOut';?>
<?php require 'component/config.php'; ?>
<?php include 'component/header.php'; ?>

<?php 
    session_unset();
    session_destroy();
?>
<h3>La sesion esta cerrado correctamente</h3>
<h3>Puede volver a acceder en <a href="login.php">Login</a></h3>


<?php include_once 'component/footer.php'; ?>