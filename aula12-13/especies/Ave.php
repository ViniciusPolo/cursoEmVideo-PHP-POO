<?php
require_once "./Animal.php";
class Ave extends Animal{
    private $corPena;

    public function __construct($corPena)
    {
        $this->corPena = $corPena;
    }
    public function locomover(){
        echo "Voando";
    }
    public function alimentar(){
        echo "comendo sementes e insetos";
    }
    public function emitirSom(){
        echo "Som de passáro";
    }
    public function fazerNinho(){
        echo "construindo ninho!";
    }



    /**
     * Get the value of corPena
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     */
    public function setCorPena($corPena): self
    {
        $this->corPena = $corPena;

        return $this;
    }
}
?>