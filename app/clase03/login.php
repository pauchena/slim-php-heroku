<?php

include_once "user.php";

// Aplicación No 22 ( Login)
// Archivo: Login.php
// método:POST
// Recibe los datos del usuario(clave,mail )por POST ,
// crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado,
// Retorna un :
// “Verificado” si el usuario existe y coincide la clave también.
// “Error en los datos” si esta mal la clave.
// “Usuario no registrado si no coincide el mail“
// Hacer los métodos necesarios en la clase usuario



if(isset($_POST['pass']) && isset($_POST['mail']))
{
        $pass=$_POST['pass'];
        $mail=$_POST['mail'];
        $user= new User("",$pass,$mail);


        $list= User::ReadFile("user.csv");
        $result=$user->Validate($list);


        switch ($result) {
            case -1:
                echo"No existe el usuario";
                break;
            case 0:
                echo"Error en campos recibidos";
                break;
            default:
                echo"Verificado";
                 break;
        
        }


}
else
    echo"Complete los campos pass y mail."



?>