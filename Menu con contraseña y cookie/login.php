<?php

session_name("sesion_user");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <main>

    </main>
  
    <div class="signupFrm">
   
            <form class="form" id="login-formulario" action="entrar.php" method="post">
                <h2>Iniciar Sesión</h2>
                <?php
                    if (isset($_SESSION["errorlogin"])) {
                    print "<p class='error'> Error loguearse!!! </p>";
                    unset($_SESSION["errorlogin"]);
                }
                         ?>
          
                <div class="inputContainer">
                    <input type="text" id="nombre-usuario" name="nombre-usuario" placeholder="a" class="input" required>
                    <label for="nombre-usuario" class="label">Nombre de Usuario</label>
                    
                </div>
                <div class="inputContainer">
                    <input type="password" class="input" id="password" name="password" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" placeholder="a" title="La contraseña debe empezar con una letra y contener al menor un dígito" required >
                    <label for="password" class="label">Contraseña</label>
                    
                </div>
                <button type="submit"  class="submitBtn" name="submit" value="entrar">Iniciar Sesión</button>
                <p class="switch-form">
                    ¿No tienes una cuenta? <a href="alta.php">Registrarse</a>
                </p>
            </form>
     
    </div>
    <div>

    <?php include "footer.php"; ?>
</body>

</html>