<?php

class Caneta
{
    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;


    public function __construct($modelo, $cor, $ponta) // Metodo Construtor
    {
       $this->modelo = $modelo;
       $this->cor = $cor;
       $this->ponta = $ponta;

       $this->tampar();
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function getModelo()
    {

        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getPonta()
    {

        return $this->ponta;
    }

    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }
}
