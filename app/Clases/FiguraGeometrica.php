<?php 

abstract class FiguraGeometrica
{

    //campos
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    //metodos
    public function __construct()
    {
        $this -> _color = "";
        $this -> _perimetro = 0.0;
        $this -> _superfice = 0.0;
    }

    protected abstract function CalcularDatos();

    public abstract function Dibujar();

    public function setColor($color)
	{
		$this->_color = $color;
	}

	public function getColor()
	{
		return $this->_color;
	}

    public function ToString()
	{
		return "Perimetro: " . $this->_perimetro . "Superficie: " . $this->_superficie . "<br/>";	
	}

}


