<?php

session_name("sesion_user");
session_start();


if ($_POST["submit"] == "entrar") {

    $json_url = 'bbdd/datos.json';
    $json = file_get_contents($json_url);
    $data = json_decode($json,true);
   $control=false;


  


 foreach($data as $usuario){
    if($_POST["nombre-usuario"]==$usuario["email"] && $_POST["password"]==$usuario["password"]){
 
   $nombreUsuario = $usuario["email"];
   $contraseña = $usuario["password"];
   $_SESSION["user"]= $usuario["email"];
  
   
   if($usuario["imagen"]==null)
   {
    $image="./default.png";
   }else{
    $image = $usuario["imagen"];
    }
   
   $_SESSION["nombre"]= $usuario["nombre"];
 
   $_SESSION["password"]=$usuario["password"];
   $_SESSION["image"]=$image;
   $_SESSION["apellidos"]=$usuario["apellidos"];
   $control=true;
  
 }
 
}
if($control==false ){
   $_SESSION["errorlogin"]="Error loguearse";
    
    header('Location: ./login.php');
}
else{
   header('Location: ./index.php');
}


}







?>