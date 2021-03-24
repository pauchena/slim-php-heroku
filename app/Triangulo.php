<?php
include_once "FiguraGeometrica.php";


class Triangulo extends FiguraGeometrica{

    private $_altura;
	private $_base;


    protected function CalcularDatos()
	{
		$this->_superficie = 0;
		$this->_perimetro = 0;
	}

    public function __construct($b,$h){
        parent::__construct();
        $this ->_base = $b;
        $this -> _altura = $h;
        $this->CalcularDatos();
        
    }

    public function Dibujar(){
        $dibujo = "";
        for ($i=0; $i <$this->_altura; $i++) { 
            $dibujo = "*";
            echo "$dibujo <br/>";
        }
        return $dibujo;
    }
}