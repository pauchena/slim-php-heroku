<?php
include_once "FiguraGeometrica.php";


class Rectangulo extends FiguraGeometrica{

    private $_ladoDos;
	private $_ladoUno;


    protected function CalcularDatos()
	{
		$this->_superficie = ($this->_ladoDos + $this->_ladoUno) * 2;
		$this->_perimetro = $this->_ladoDos * $this->_ladoUno;
	}

    public function __construct($l2,$l1){
        parent::__construct();
        $this ->_ladoDos = $l2;
        $this -> _ladoUno = $l1;
        $this->CalcularDatos();
        
    }

    public function Dibujar(){
        $dibujo="";
        for ($i=0; $i <$this->_ladoUno;$i++) { 
            for ($j=0; $j < $this->_ladoDos; $j++){
                $dibujo .= "*"; 
           }
           $dibujo .= "<br>";
        }
        return $dibujo;
    }

    public function ToString()
    {
        return parent::ToString() . $this->Dibujar();
    }
}