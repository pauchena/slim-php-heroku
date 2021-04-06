<?php
// Aplicación No 20 (Registro CSV)
// Archivo: registro.php
// método:POST
// Recibe los datos del usuario(nombre, clave,mail )por POST ,
// crear un objeto y utilizar sus métodos para poder hacer el alta,
// guardando los datos en usuarios.csv.
// retorna si se pudo agregar o no.
// Cada usuario se agrega en un renglón diferente al anterior.
// Hacer los métodos necesarios en la clase usuario

include_once "user.php";

//verificar datos antes
if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['mail']))
{
    $name = $_POST["name"];
    $pass =$_POST["pass"];
    $mail =$_POST["mail"];

    $user= new user($name, $pass,$mail);

    if(User::SaveUser($user))
        echo "Usuario registrado";
    
    else
        echo "Error al registrar usuario";
    


}
else
echo "Complete todos los campos.";


?>