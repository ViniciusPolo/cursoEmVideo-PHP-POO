<?php
require_once "./especies/Mamifero.php";
class Cachorro extends Mamifero{
    public function enterraOsso(){}
    public function abanarRabo(){}
    public function locomover(){
        echo " Correndo ";
    }
    public function alimentar(){
        echo "roendo osso";
    }
    public function emitirSom(){
        echo "Latir";
    }
}
?>