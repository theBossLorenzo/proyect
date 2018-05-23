<?php
        include_once 'header.php';
?>

<section class="main-container">
            <div class="main-wrapper">
                <h2>Registrarse</h2>
                 <form class="signup-form" action="includes/signup.inc.php" method="POST">
                    <input type="text" name="first" placeholder="Nombre">
                    <input type="text" name="last" placeholder="Apellido">
                    <input type="text" name="email" placeholder="Correo">
                    <input type="text" name="uid" placeholder="Usuario">
                    <input type="password" name="pwd" placeholder="Contraseña">
                    <button type="submit" name="submit">Registrarse</button>
                </form>
            </div>
</section>

<?php
        include_once 'footer.php';
?>