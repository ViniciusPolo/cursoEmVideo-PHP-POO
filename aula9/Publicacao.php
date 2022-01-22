<?php
interface Publicacao{
    public Function abrir();
    public Function fechar();
    public Function folhear($p);
    public Function avancarPag();
    public Function voltarPag();
}
?>