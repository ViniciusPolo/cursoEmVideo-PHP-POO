<?php
require_once "Publicacao.php";
require_once "Pessoa.php";
class Livro implements Publicacao{
    private $titulo;

    private $autor;

    private $totPaginas;

    private $aberto;

    private Pessoa $leitor;

    private $pagAtual;

    public function __construct($titulo, $autor, $totPaginas, $aberto, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = $aberto;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "<p>O Livro ".$this->getTitulo()." do autor ".$this->getAutor()." está ".$this->getAberto(). " e na pagina ".$this->getPagAtual().".<p/>";
        echo "<p>Está sendo lido por ".$this->leitor->getNome()." do sexo ".$this->leitor->getSexo()." e ".$this->leitor->getIdade()." anos.<p/>";
    }

    public function abrir(){
        $this->aberto = "aberto";
    }
    public function fechar(){
        $this->aberto = "fechado";
    }
    public function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual=0;
        } else {
           $this->pagAtual=$p; 
        }

    }
    public function avancarPag(){
        if($this->pagAtual<$this->totPaginas){
            $this->pagAtual++;
        }
    }
    public function voltarPag(){
        if($this->pagAtual<1){
        $this->pagAtual--;
        }
    }
        

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of totPaginas
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * Set the value of totPaginas
     */
    public function setTotPaginas($totPaginas): self
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    /**
     * Get the value of aberto
     */
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     */
    public function setAberto($aberto): self
    {
        $this->aberto = $aberto;

        return $this;
    }

    /**
     * Get the value of leitor
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     */
    public function setLeitor($leitor): self
    {
        $this->leitor = $leitor;

        return $this;
    }

    /**
     * Get the value of pagAtual
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * Set the value of pagAtual
     */
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }
}
?>