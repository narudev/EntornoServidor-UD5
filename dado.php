<?php
  class dado {

    private $minNumDado;
    private $maxNumDado;

    //Constructor
    public function __construct($minNumDado,$maxNumDado){
      //Comprobamos que los valores introducidos son entre 0 y 12
      if(($minNumDado < 0) || ($maxNumDado >12 )){
        echo "<h1>Los números tienen que ser entre 0 y 12</h1><br>";
      }else{
        $this-> minNumDado = $minNumDado;
        $this-> maxNumDado = $maxNumDado;
      }

    }

    //Getter
    public function getMinNumDado(){
      return $this->minNumDado;
    }
    public function getMaxNumDado(){
      return $this->maxNumDado;
    }

    //setter
    public function setMinNumDado($minNumDado){
      $this->minNumDado = $minNumDado;
    }
    public function setMaxNumDado($maxNumDado){
      $this->maxNumDado = $maxNumDado;
    }

    public function tirarDado(){
      $tirada = rand($this->getMinNumDado(),$this->getMaxNumDado());
      return $tirada;
    }

  }

 ?>
