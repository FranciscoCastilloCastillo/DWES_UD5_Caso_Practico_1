<?php

/**
*Clase Dado
*/
class Dado{

  //Propiedades
  private $minNumDado = 0;
  private $maxNumDado = 12;

  //Métodos de la clase
  //getters y setters
  public function getMinNumDado(){
    return $this->minNumDado;
  }

  public function setMinNumDado($MinNumDado){
    if($MinNumDado>=0 && $MinNumDado<$this->maxNumDado){
      $this->minNumDado = $MinNumDado;
    }
  }

  public function getMaxNumDado(){
    return $this->maxNumDado;
  }

  public function setMaxNumDado($MaxNumDado){
    if($MaxNumDado<=12 && $MaxNumDado>$this->minNumDado){
      $this->maxNumDado = $MaxNumDado;
    }
  }

  /**
  *Obtenemos el valor rand de la tirada
  */
  public function tirarDado (){
    return rand($this->minNumDado,$this->maxNumDado);
  }
}

?>

