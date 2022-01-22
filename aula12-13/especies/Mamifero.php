<?php
require_once "./Animal.php";
class Mamifero extends Animal{
    private $corPelo;

    public function __construct($corPelo)
    {
        $this->corPelo = $corPelo;
    }
    


    /**
     * Get the value of corPelo
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     */
    public function setCorPelo($corPelo): self
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}
?>