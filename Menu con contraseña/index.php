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
    <title>HOME</title>
</head>

<body>


    <?php include "menu.php"; ?>
 

    <main>

        <?php

        $lista_usuarios = [];
        $file = 'datos.json';   

        $jsonData = file_get_contents("./bbdd/{$file}");
        $lista_usuarios = json_decode($jsonData);

        echo '<h2> Total de usuarios de alta: ' . count($lista_usuarios) . '</h2>';

        ?>



    </main>


    <?php include "footer.php"; ?>



</body>

</html>