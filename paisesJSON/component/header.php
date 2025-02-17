<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t;?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $t;?></h1>
        <nav>
            <ul>
                <li><a href="paises.php">Inicio</a></li>
                <li><a href="login.php">Administrador</a></li>
                <li><a href="mobile.php">Mobile</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
            <ul>
                <?php 
                    if($logeado){
                        echo '<li><a href="login.php">Login con AVATAR</a></li>';
                    } else {
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                ?>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>

    