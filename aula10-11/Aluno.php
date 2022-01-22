<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    private $matricula;

    private $curso;

    public function __construct($matricula, $curso)
    {
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function cancelarMatr(){
        $this->matricula = !$this->matricula;
    }
    
    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade de ".$this->getNome()."</>";
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }
}
?>