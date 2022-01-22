<?php 
class Conta{
    //atributos
    public $nroconta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //metodos
public function __construct(){
    $status = false;
    $saldo = 0.0;
}

    public function abrirConta($tipo){
        $this->status = true;
        if($tipo == 'CC'){
            $this->setSaldo (50.00);
            $this->setTipo('CC');
        } elseif ($tipo =='CP'){
            $this->setSaldo (150.00);
            $this->setTipo('CP');

        }
    }
    public function fecharConta($valor){
        if($valor > 0){
            echo "Impossivel fechar a conta, a possuí saldo";
        } else {
            $this->status = false;
            echo "Conta Fechada\n";
        }
    }
    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }
    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
    }
    public function pagarMensalidade(){
        if($this->tipo == 'CC' && $this->status){
            $this->setSaldo($this->getSaldo() -12);
        } elseif ($this->tipo == 'CP' ) {
            $this->setSaldo($this->getSaldo() - 20.00);
        } else {
            echo "conta fechada não paga mensalidade";
        }
    }

    /**
     * Get the value of nroconta
     */
    public function getNroconta()
    {
        return $this->nroconta;
    }

    /**
     * Set the value of nroconta
     */
    public function setNroconta($nroconta): self
    {
        $this->nroconta = $nroconta;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of dono
     */
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Set the value of dono
     */
    public function setDono($dono): self
    {
        $this->dono = $dono;

        return $this;
    }

    /**
     * Get the value of salto
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of salto
     */
    public function setSaldo($saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }
}
?>