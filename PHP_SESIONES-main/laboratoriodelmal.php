<?php require '_config.php';?>
<?php include '_header.php';?>
<?php 
    if(isset($_SESSION['logueado'])) {
        header('Location: expulsando.php');
    }


?>
<h3>Laboratorio del mal</h3>


<?php include '_footer.php';?>