<?php

require_once 'bebida.php';

class Refrigerante extends Bebida
{
    private $retornavel;

    public function setRetornavel($retornavel)
    {
        $this->retornavel = $retornavel;
    }

    public function getRetornavel()
    {
        return $this->retornavel;
    }

    public function mostraBebida()
    {
        $mostra = "Nome: " . $this->getNome() .
                  "<br/>Preço: " . $this->getPreco() .
                  "<br/>Retornável: " . ($this->getRetornavel() ? "Sim" : "Não");
        return $mostra;
    }

    public function verificaPreco($preco)
    {
        return $preco < 5;
    }
}
