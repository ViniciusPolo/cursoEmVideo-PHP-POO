<?php
require_once "Lutador.php";
class Luta {

    private Lutador $desafiado;
    private Lutador $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta(Lutador $l1, Lutador $l2){
        if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2){
            $this->aprovada = true;
            $this->desafiante = $l1;
            $this->desafiado = $l2;
        } else {
            $this->aprovada = false;
            //$this->desafiante = null;
            //$this->desafiado = null;
        }
    }
    public function lutar(){
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0: 
                    echo "<p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //vitoria desafiante
                    echo "<p>Vitória de ".$this->desafiante->getNome()."<p/>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                case 2: //vitoria desafiado
                    echo "<p>Vitória de ".$this->desafiado->getNome()."<p/>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
            }
        }else{
            echo "<p>Luta não permitida<p/>";
            
        }
    }

    /**
     * Get the value of desafiado
     *
     * @return Lutador
     */
    public function getDesafiado(): Lutador
    {
        return $this->desafiado;
    }

    /**
     * Set the value of desafiado
     *
     * @param Lutador $desafiado
     *
     * @return self
     */
    public function setDesafiado(Lutador $desafiado): self
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    /**
     * Get the value of desafiante
     *
     * @return Lutador
     */
    public function getDesafiante(): Lutador
    {
        return $this->desafiante;
    }

    /**
     * Set the value of desafiante
     *
     * @param Lutador $desafiante
     *
     * @return self
     */
    public function setDesafiante(Lutador $desafiante): self
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    /**
     * Get the value of rounds
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * Set the value of rounds
     */
    public function setRounds($rounds): self
    {
        $this->rounds = $rounds;

        return $this;
    }

    /**
     * Get the value of aprovada
     */
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * Set the value of aprovada
     */
    public function setAprovada($aprovada): self
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}

   /* interface Luta{

        public function apresentar();
        public function status();
        public function ganharLuta();
        public function perderLuta();
        public function empatarLuta();
    }