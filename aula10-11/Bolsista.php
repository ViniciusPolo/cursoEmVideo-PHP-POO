<?php
class Bolsista extends Aluno{
    private $bolsa;

    public function __construct($bolsa)
    {
        $this->bolsa = $bolsa;
    }
    public function renovarBolsa(){}
    public function pagarMensalidade() //substituiu o metodo de Aluno (overide) "final" impede isso.
    {
        echo "<p>Pagando mensalidade com desconto de ".$this->getNome()."<p/>";
    }


}
?>