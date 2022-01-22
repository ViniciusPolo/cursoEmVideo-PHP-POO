<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $volume = 50; 
        $ligado = false;
        $tocando = false;
    }
    public function ligar(){
        $this->setLigado(true);
    }    
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "----- Menu ------";
        echo "<br>Está ligado: ".($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está Tocando: ".($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: ";
        for ($i=0; $i <= $this->getVolume(); $i+=10){
            if($this->getVolume() >= 10){
                echo "|";
            }
        }
        echo "<br>";
    } 
    public function fecharMenu(){
        echo "<br>Fechando o Menu";
    } 
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function menosVolume(){
        if ($this->getLigado() || $this->getVolume() > 0){
            $this->setVolume($this->getVolume() - 10);
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() || $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->ligarMudo()){
            $this->setVolume(50);
        }
    }
    public function play(){
        if ($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getTocando()){
            $this->setTocando(false);
        }
    }

    /**
     * Get the value of volume
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     */
    public function setVolume($volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */
    public function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     */
    public function setLigado($ligado): self
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */
    public function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     */
    public function setTocando($tocando): self
    {
        $this->tocando = $tocando;

        return $this;
    }
}
?>