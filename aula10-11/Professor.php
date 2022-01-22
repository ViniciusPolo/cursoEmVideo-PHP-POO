<?php
require_once "Pessoa.php";
class Professor extends Pessoa{
    private $especialidade;

    private $salario;

    public function __construct($especialidade, $salario)
    {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento($aum){
        $this->salario +=$aum;
    }


    /**
     * Get the value of especialidade
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     */
    public function setEspecialidade($especialidade): self
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}
?>