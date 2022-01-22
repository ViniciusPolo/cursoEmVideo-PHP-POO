<?php
require_once "./especies/Mamifero.php";
class Canguru extends Mamifero{
    public function usarBolsa(){}
    public function locomover(){
        echo " pulando ";
    }
    public function alimentar(){
        echo " roendo osso ";
    }
    public function emitirSom(){
        echo " Latir ";
    }
    
}
?>