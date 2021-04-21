
<?php

include_once ("access.php");

class User {
  

    public static function InsertaUser($nombre, $apellido, $clave, $mail, $localidad) {
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
    $consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO usuarios (nombre,apellido,clave,mail,localidad)
                                                    VALUES(:nombre,:apellido,:clave,:mail,:localidad)");
    
    $consulta->bindValue(':nombre', $nombre, PDO::PARAM_STR);
    $consulta->bindValue(':apellido', $apellido, PDO::PARAM_STR);
    $consulta->bindValue(':clave', $clave, PDO::PARAM_STR);
    $consulta->bindValue(':mail', $mail, PDO::PARAM_STR);
    $consulta->bindValue(':localidad', $localidad, PDO::PARAM_STR);
    $consulta->execute();
    echo ($consulta->execute()) ? "El usuario con id: ". $objetoAccesoDato->RetornarUltimoIdInsertado()." fue insertado correctamente": "Error al insertar";
    }
    


}

?>