<?php
    require_once "./Animal.php";
    class Reptil extends Animal{
        private $corEscama;
        
        public function __construct($corEscama){
            $this->corEscama = $corEscama;
            
        }

        public function locomover(){
            echo "Rastejando";
        }
        public function alimentar(){
            echo "comendo";
        }
        public function emitirSom(){
            echo "Som de réptil";
        }

        /**
         * Get the value of corEscama
         */
        public function getCorEscama()
        {
                return $this->corEscama;
        }

        /**
         * Set the value of corEscama
         */
        public function setCorEscama($corEscama): self
        {
                $this->corEscama = $corEscama;

                return $this;
        }
    }
?>