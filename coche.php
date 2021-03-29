<?php

class Vehiculo{

    protected $marca;
    protected $color;
    protected $encendido= false;

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of encendido
     */ 
    public function getEncendido()
    {
        return $this->encendido;
    }

    /**
     * Set the value of encendido
     *
     * @return  self
     */ 
    public function setEncendido($encendido)
    {
        $this->encendido = $encendido;

        return $this;
    }



    public function __construct($marca,$color,$encendido){

        $this->marca=$marca;
        $this->color=$color;
        $this->encendido=$encendido;
    }
    public function encender(){
        if($this->encendido){
            echo "El motor ya esta encendido<br>";
        }else{
            echo "El motor ahora esta encendido<br>";
            $this->encendido = true;
        }
    }
    public function estado(){
        if($this->encendido){
            echo "ENCENDIDO<br>";
        }else{
            echo "APAGADO<br>";
        }
    }
}