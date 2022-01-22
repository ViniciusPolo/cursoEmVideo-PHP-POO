<?php
class Caneta{
    public $modelo; //var is public by default
    private $ponta;
    private $cor;
    private $tampada;

    public function __construct($c, $m, $p){ //metodo construtor
        $this->cor = $c;
        $this->ponta = $p;
        $this->modelo = $m;
        $this->tampada = true;


    }
    public function tampar(){
        return $this->tampada = true;
    }   
    public function getCor($c){
        return $this->cor =$c;

    }
    public function getModelo(){
        return $this->modelo ;

    }
    public function setModelo($m){
        return $this-> modelo = $m;

    }
    public function getPonta(){
        return $this->ponta;

    }
    public function setPonta($p){
        return $this-> ponta = $p;

    }
   
}

?>