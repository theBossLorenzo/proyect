<?php
session_start();
?>

<!DOCTYPE HTML>

<html>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<header>
        <nav>
                <div class="main-wrapper">
                        <ul>
                                <li><a href="index.php">Inicio</a></li>
                                
                        </ul>
                        <div class="nav-login">
                            <?php
                                if (isset($_SESSION['u_id'])) {
                                    echo   '<a href="perfil.php">Perfil</a>
                                            <form action="buscarperfil.php" method ="POST">
                                            <input type="text" class="form-control input-sm" maxlength="64" placeholder="Usuario" name="busca"/>
                                            <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                                            </form>
                                            <form action="includes/logout.inc.php" method="POST">
                                            <button type="submit" name="submit" class="btn btn-primary btn-sm">Salir</button>
                                            </form>';
                                } else {
                                     echo '<form action="includes/login.inc.php" method="POST">
                                                    <input type="text" name="uid" placeholder="Usuario/Correo" />
                                                    <input type="password" name="pwd" placeholder="Contraseña" />
                                                     <button type="submit" name="submit">Iniciar Sesión</button>
                                            </form>
                                            <a href="signup.php">Registrarse</a>';
                                }
                            ?>
                        </div>
                </div>
        </nav>
</header>