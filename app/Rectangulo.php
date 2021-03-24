<?php
include_once "FiguraGeometrica.php";


class Rectangulo extends FiguraGeometrica{

    private $_ladoDos;
	private $_ladoUno;


    protected function CalcularDatos()
	{
		$this->_superficie = 0;
		$this->_perimetro = 0;
	}

    public function __construct($l2,$l1){
        parent::__construct();
        $this ->_ladoDos = $l2;
        $this -> _ladoUno = $l1;
        $this->CalcularDatos();
        
    }

    public function Dibujar(){
        $dibujo = "";
        for ($i=0; $i <$this->_ladoUno; $i++) { 
            $dibujo = "*";
        }
        return $dibujo;
    }
}