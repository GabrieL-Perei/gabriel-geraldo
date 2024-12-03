<?php

require_once 'bebida.php';

class Vinho extends Bebida{

    private $safra;
    private $tipo;

    public function setSafra($safra){
        $this->safra = $safra;
    }

    public function getSafra(){
        return $this->safra;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function mostraBebida(){
        $mostra = "Nome: ".$this->getNome().
                  "<br/>Preço: ".$this->getPreco().
                  "<br/>Safra: ".$this->getSafra().
                  "<br/>Tipo: ".$this->getTipo();
        return $mostra;
    }

    public function verificaPreco($preco){
        return $preco < 25?true:false;
    }

}