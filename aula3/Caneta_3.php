<?php
class Caneta_3{
    public $modelo; //var is public by default
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if($this->tampada ==true){
            echo "<p>Não posso rabiscar</p>";
        } else{
            echo "<p>Estou rabiscando</p>";
            
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}

?>