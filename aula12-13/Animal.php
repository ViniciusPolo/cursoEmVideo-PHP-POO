<?php
require_once "./especies/Mamifero.php";
abstract class Animal {
    private $peso;
    private $idade;
    private $membros;

    public function locomover(){
        echo "Andando";
    }
    public function alimentar(){
        echo "mamando";
    }
    public function emitirSom(){
        echo "Som de mamifero";
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of membros
     */
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set the value of membros
     */
    public function setMembros($membros): self
    {
        $this->membros = $membros;

        return $this;
    }
}
?>