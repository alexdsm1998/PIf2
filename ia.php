<?php

class ia
{

//atributos
public $columnas= 1 ;
public $fila= 3 ;

//método
public function getColumna() {
 return $this->columnas;

}

public function getfila() {
 return $this->fila;

}

public function randomPos(){
}

//setter

public function setFila($fil) {
$this->fila=$fil;

}

public function setColumna($col){
$this->columnas=$col;
 }
}
?>
