<?php

class User{
 
    public $name;
    public $pass;
    public $mail;
    public $path;

    public function __construct(string $name, string $pass, string $mail, string $path)
    {
      $this->id =rand(1,10000);
      $this->name=$name;
      $this->pass=$pass;
      $this->mail=$mail;
      $this->path = $path;
      $this->date = date("d/m/y");
    }


    //Guarda usuario
    static function SaveUser(User $user){
        if(isset($user -> name)&& isset($user -> pass) && isset($user -> mail)){
            $file = fopen("user.csv", "a");
            fwrite($file,"{$user->name},{$user -> pass},{$user->mail}\n");
            fclose($file);
            return true;

        }
        else{
        
            echo"campo en null";
           
        }
    }   

    //Muestra los datos del usuario
    public function ToString()
    {
        return "Nombre: " .$this->name . " Clave: " .$this->pass. " Mail: " .$this->mail;
    }


    //Retorna un array con los datos leídos del archivo.
    public static function ReadFile(string $nameFile){
        
        $array=array();

        if(isset($nameFile)){
           if($file=fopen($nameFile,"r")){
               //echo "se pudo leer el archivo";
               //var_dump($file);
                while ($data = fgetcsv($file)) {
                    //var_dump($data);
                    array_push($array, new User($data[0],$data[1],$data[2],""));
                 }
            }else
             echo "No se pudo leer el archivo";
            
        }else
          echo "El nombre del archivo no puede ser NULL";
           
        return $array;

    }

    public static function ReadFileJson($nameFile){
       
     $array=array();
     if(isset($nameFile)){
           if($file=fopen($nameFile,"r")){
               //echo "se pudo leer el archivo";
               //var_dump($file);
                while ($data = fgets($file)) {
                    //var_dump($data);
                    $user =json_decode($data);
                    array_push($array,$user);
                 }
            }else
             echo "No se pudo leer el archivo";
            
        }else
          echo "El nombre del archivo no puede ser NULL";
           
        return $array;

    }

    //Muestra los datos del array por cada usuario
    public static function ShowUser($array){
        if(isset($array)){
            echo "<ul>";
            foreach ($array as $value) {
                echo "<li>{$value->ToString()}</li>";
            }
             echo"</ul>";
        }
    }
    
    public function Compare(User $user){

        $aux=-1;

        if(isset($_POST['pass']) && isset($_POST['mail'])){

            if($user->mail == $this->mail)
            {
                if($user->pass == $this->pass)
                {
                    $aux=1;
                }
                else
                {
                    $aux=0;
                }
            }
        }
        return $aux;
            

        }



        public function Validate($array)
        {
            $aux = -1;
            if(!is_null($array))
            {
                foreach ($array as $value) 
                {
                    if(($aux = $this->Compare($value)) == 1)
                    {
                        break;  
                    }
                }
            }
            return $aux;
        }
    
        public static function SaveToJson(User $user){
            $nameFile="user.json";
            $file = fopen($nameFile, 'a');
            fwrite($file,json_encode($user)."\n");
            fclose($file);
        }

        

}


