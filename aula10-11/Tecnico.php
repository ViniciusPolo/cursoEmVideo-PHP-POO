<?php
class Tecnico extends Aluno{
    private $registroProfissional;

    public function __construct($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;
    }
    public function praticar(){}
    
}
?>