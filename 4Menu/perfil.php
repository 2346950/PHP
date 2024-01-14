<?php
session_name("sesion_user");
session_start();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfil Usuario</title>
</head>

<body>

   
    <?php include "./menu.php"; ?>
 


    <main>
        <?php

        if (isset($_SESSION['user'])) {

         

            $nombreUsuario=$_SESSION["user"];
            $nombre=$_SESSION["nombre"];
            $image=$_SESSION["image"];
            $contraseña=$_SESSION["password"];
            $apellidos=$_SESSION["apellidos"];
        
            print("Nombre Usuario: $nombreUsuario <br>");
            print("Contraseña: $contraseña <br>");
            print("Foto perfil: $image <br>");
            
            
            print "<table border='1'>";
            print "<tr>";
            print "<th>Imagen</th>";
            print "<th>Nombre</th>";
            print "<th>Apellidos</th>";
            print "</tr>";
            print "<tr>";
            print "<td><img src='bbdd/$image' alt='foto perfil' width='100'></td>";
            print "<td>$nombre</td>";
            print "<td>$apellidos</td>";
            print "</tr>";
            print "</table>";
                
                
        } else {
            echo "No estas logueado";
            
        }


        ?>
    </main>
   
    <?php include "footer.php"; ?>
  


</body>

</html>