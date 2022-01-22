<?php
require_once "./Animal.php";
class Peixe extends Animal{
    private $corEscama;

    public function __construct($corEscama)
    {
        $this->corEscama = $corEscama;
    }
    public function soltarBolha(){
        echo "Soltando Bolhas";
    }
    public function locomover(){
        echo "Nadando";
    }
    public function alimentar(){
        echo "comendo substâncias";
    }
    public function emitirSom(){
        echo "Som de peixe";
    }

    /**
     * Get the value of corEscama
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     */
    public function setCorEscama($corEscama): self
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}
?>