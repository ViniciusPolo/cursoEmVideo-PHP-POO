<?php
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empate;
    
    public function __construct($no, $na, $id, $alt, $pe, $vit, $der, $emp){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $alt;
        $this->setPeso($pe);
        //$this->categoria = $this->getCategoria();
        $this->vitorias = $vit;
        $this->derrotas = $der;
        $this->empate = $emp;
    }

    public function apresentar(){
        echo "<p>----------------------------</p>";
        echo "<p>Chegou a hora!!!<br/>O Lutador " . $this->getNome() . " que veio diretamente de " . $this->getNacionalidade() . " pesando " . $this->getPeso();
        echo " e medindo " . $this->getAltura() . "<br>Ele é um peso " . $this->getCategoria() . "<br>Com um cartel de " . $this->getVitorias() . " vitórias, " .
        $this->getDerrotas() . " derrotas e " . $this->getEmpate() . "No Results<br><br>IIIIIIIIIIIT'S TIIIIIIIME";
        
    }
    public function status(){
        echo "<p>----------------------------</p>";
        echo "<p>". $this->getNome(). " é um peso "  . $this->getCategoria() . "<br>Com um cartel de " . $this->getVitorias() . " vitórias, " .
        $this->getDerrotas() . " derrotas e " . $this->getEmpate() . "  Results<br>";
    }
    public function ganharLuta(){
        $this->vitorias = $this->getVitorias() +1;
    }
    public function perderLuta(){
        $this->derrotas = $this->getDerrotas() +1;
    }
    public function empatarLuta(){
        $this->empate = $this->getEmpate() +1;
    } 

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nacionalidade
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     */
    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

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
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
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
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     */
    private function setCategoria()
    {
        if ($this->peso < 52.2){
            $this->categoria = "Invalido";
        } elseif ($this->peso < 70.3){
            $this->categoria = "Leve";
        } elseif ($this->peso < 83.9){
            $this->categoria = "Médio";
        } elseif ($this->peso < 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }

    /**
     * Get the value of vitorias
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * Set the value of vitorias
     */
    public function setVitorias($vitorias): self
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    /**
     * Get the value of derrotas
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * Set the value of derrotas
     */
    public function setDerrotas($derrotas): self
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    /**
     * Get the value of empate
     */
    public function getEmpate()
    {
        return $this->empate;
    }

    /**
     * Set the value of empate
     */
    public function setEmpate($empate): self
    {
        $this->empate = $empate;

        return $this;
    }
}


?>