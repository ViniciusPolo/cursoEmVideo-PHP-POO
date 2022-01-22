<?php
require_once "Pessoa.php";
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);//constructor da mãe abstrata
        $this->login= $login;
        $this->totAssistido=0;
    }

    public function viuMaisUm(){
        $this->totAssistido++;
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     */
    public function setLogin($login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totAssistido
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Set the value of totAssistido
     */
    public function setTotAssistido($totAssistido): self
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}
?>
