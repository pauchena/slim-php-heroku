
<!-- Aplicación No 27 (Registro BD)
Archivo: registro.php
método:POST
Recibe los datos del usuario( nombre,apellido, clave,mail,localidad )por POST ,
crear un objeto con la fecha de registro y utilizar sus métodos para poder hacer el alta,
guardando los datos la base de datos
retorna si se pudo agregar o no. -->

<?php

//chena paula
include_once ("user.php");

if(isset($_POST["nombre"]) &&  isset($_POST["clave"]) && isset($_POST["mail"]) )
{

    $nombre = $_POST["nombre"];
    $apellido =$_POST["apellido"];
    $clave =$_POST["clave"];
    $mail =$_POST["mail"];
    $localidad =$_POST["localidad"];
    
    User::InsertaUser($nombre,$apellido,$clave,$mail,$localidad);


}
else
echo "Complete todos los campos.";



?>