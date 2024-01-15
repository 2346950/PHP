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
    <title>Alta Usuario</title>
</head>
<body>
<?php include "menu.php"; ?>
    <div class="signupFrm">
  
  
            <form class="form" id="register-form" action="registro.php" method="post">
                <h2>Registro</h2>
                <?php
           
           if (isset($_SESSION["email"])) {
              print "<p class='error'> No coinciden email </p>";
              unset($_SESSION["email"]);
          }
          if (isset($_SESSION["contraseña"])) {
              print "<p class='error'> Las contraseñas no coinciden </p>";
              unset($_SESSION["contraseña"]);
          }if (isset($_SESSION["existe"])) {
            print "<p class='error'> Usuario existente </p>";
            unset($_SESSION["existe"]);
        }
    ?>
                  
  
                    
            <div class="inputContainer">
                <input type="text" id="nombre-usuario" name="nombre-usuario" placeholder="a" class="input" required>
                <label for="nombre-usuario" class="label">Nombre</label>
            </div>   

            <div class="inputContainer">
                <input type="text" id="apellidos" name="apellidos" placeholder="a" class="input" required>
                <label for="apellidos"class="label">Apellidos</label>
            </div>  
            
            <div class="inputContainer">
                <input type="text" id="telefono" name="telefono" placeholder="a" class="input" required>
                <label for="telefono" class="label">Telefono</label> 
            </div>  

            <div class="inputContainer">
                <input type="email" id="email" name="email" placeholder="a" class="input" required>    
                <label for="email" class="label">Email</label>
            </div>    

            <div class="inputContainer">
                <input type="text" id="validar-email" name="validar-email" placeholder="a" class="input" required>
                <label for="validar-email" class="label">Repita Email</label>
            </div> 

                
            <div class="inputContainer">
                    <input type="password" id="password" name="password" minlength="6"  placeholder="a" class="input"  pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="La contraseña debe empezar con una letra y contener al menor un dígito(mínimo 6 caracteres)" required >
                    <label for="password" class="label">Contraseña:</label>
                    
            </div>
             
            <div class="inputContainer">
            <input type="password" id="password2" name="password2" minlength="6"  placeholder="a" class="input" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="La contraseña debe empezar con una letra y contener al menor un dígito (mínimo 8 caracteres)" required >
                    <label for="password2" class="label">Repite Contraseña:</label>
                    
            </div>  
                    
            <input type="file"  name="fichero" class="subir"></p>        
                    
           
            <button type="submit" class="submitBtn">Registrarse</button>
               
               
            </form>          
            
                
                    
      
    </div>
    <?php include "footer.php"; ?>
</body>
</html>            
              
               
                
                
                
                    
               
            
        
