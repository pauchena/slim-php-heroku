<?php
include_once "FiguraGeometrica.php";


class Triangulo extends FiguraGeometrica{

    private $_altura;
	private $_base;


    protected function CalcularDatos()
	{
		$this->_superficie = ($this->_base * $this->_altura)/2;
		$this->_perimetro = $this->_base + $this->_altura ;
	}

    public function __construct($b,$h){
        parent::__construct();
        $this ->_base = $b;
        $this -> _altura = $h;
        $this->CalcularDatos();
        
    }

    public function Dibujar(){
        for($i=1;$i<=$this->_altura;$i++){ //vertical
          
            for($j=1;$j<=$i;$j++){//horizontal
                echo ' *'; 
            
            }
            echo '<br/>';
        }
    }

    public function ToString()
    {
        return parent::ToString() . $this->Dibujar();
    }
}