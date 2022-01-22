<?php
require_once "Pessoa.php";
class Funcionario extends Pessoa{
    private $setor;

    private $trabalhando;

    public function __construct($setor, $trabalhando)
    {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho(){
        $this->trabalhando = !$this->trabalhando;
    }

    /**
     * Get the value of setor
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     */
    public function setSetor($setor): self
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     */
    public function setTrabalhando($trabalhando): self
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}
?>