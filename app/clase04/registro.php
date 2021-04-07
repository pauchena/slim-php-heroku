<?php

include_once "user.php";

//Chena Paula.
// Aplicación No 23 (Registro JSON)
// Archivo: registro.php
// método:POST
// Recibe los datos del usuario(nombre, clave,mail )por POST ,
// crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000).
// crear un dato con la fecha de registro , toma todos los datos y utilizar sus métodos para
// poder hacer el alta,
// guardando los datos en usuarios.json y subir la imagen al servidor en la carpeta
// Usuario/Fotos/.
// retorna si se pudo agregar o no.
// Cada usuario se agrega en un renglón diferente al anterior.
// Hacer los métodos necesarios en la clase usuario.


    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $mail=$_POST["mail"];

    $nameFile= $_FILES["img"];

    if(isset($name)&& isset($pass) && isset($mail)){

        $extensionFile=pathinfo($file,PATHINFO_EXTENSION);
        $dest ="User/img/".$mail. "." . $extensionFile;
        if(!file_exists(($dest))){
            move_uploaded_file($_FILES["img"]["tmp"],$dest);
            $user = new User($name,$pass,$mail,$dest);
            if(User::SaveToJson($user))
                echo "Se dio de alta el usuario con la foto";
            else
                echo "Ocurrió un error al intentar guardar el usuario";
        }else
            echo"No es posible cargar, el archivo porque ya existe.";
    }else
        echo "Debe ingresar todos los datos para el alta";

?>