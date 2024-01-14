<?php
session_destroy();
session_name("sesion_user");
session_start();

$email=$_POST["email"];
$email2=$_POST["validar-email"];
$contraseña=$_POST["password"];
$contraseña2=$_POST["password2"];
$usuario=$_POST["nombre-usuario"];
$apellidos=$_POST["apellidos"];
$telefono=$_POST["telefono"];
$imagen=$_POST["fichero"];
$passwordHash = password_hash($contraseña, PASSWORD_DEFAULT);

$control=true;





if($email!=$email2 ){
   $_SESSION["email"]="Email no coinciden";
    
    header('Location: ./alta.php');
}elseif($contraseña!=$contraseña2){
    $_SESSION["contraseña"]="Contraseña no coincide";
    header('Location: ./alta.php');
}
else{



    $file = 'bbdd/datos.json';   
    $lista_usuarios = [];
     print "<p>Registro Completado..</p>";
 $jsonData = file_get_contents("./{$file}", FILE_USE_INCLUDE_PATH);
 $lista_usuarios = json_decode($jsonData);

 foreach($lista_usuarios as $user){
        if($user->email==$email){
            $_SESSION["existe"]="Existe";
            header('Location: ./alta.php');
            $control=false;

 }
 }

 if($control==true){
  $usuario = array(
     "nombre" => $usuario,
     "apellidos"=>$apellidos,
      "telefono" => $telefono,
      "email" => $email,
      "password"=>$passwordHash,
      "imagen"=>$imagen

  );
  array_push($lista_usuarios, $usuario);

  $json_lista_usuarios = json_encode($lista_usuarios, JSON_PRETTY_PRINT);



  file_put_contents($file, $json_lista_usuarios);
 

 }

 print"<a href='index.php'>Loguearse</a>";





}