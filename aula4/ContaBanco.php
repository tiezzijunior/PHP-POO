<?php

class ContaBanco
{

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // METODO CONSTRUTOR
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);

        echo "<p>Conta criada com sucesso!</p>";
    }

    // ABRIR CONTA
    public function abrirConta($tipo)
    {

        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == 'CC') {

            $this->setSaldo(50);
        } else if ($tipo == 'CP') {

            $this->setSaldo(150);
        }
    }

    // FECHAR CONTA
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {

            echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        } else if ($this->getSaldo() < 0) {

            echo "<p>Conta está em débito. Impossivel encerra-la</p>";
        } else {

            $this->setStatus(false);
        }
    }

    // REALIZAR DEPOSITOS
    public function deposito($valor)
    {
        if ($this->getStatus()) {

            $this->setSaldo($this->getSaldo() + $valor);
        } else {

            echo "<p>Conta fechada! Não consigo depositar.</p>";
        }
    }

    // REALIZAR SAQUES
    public function sacar($valor)
    {
        if ($this->getStatus()) {

            if ($valor <= $this->getSaldo()) {

                $this->setSaldo($this->getSaldo() - $valor);
            } else {

                echo "<p>Saldo insuficiente!</p>";
            }
        } else {

            echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }

    // PAGAR MENSALIDADES
    public function pagarMensalidade()
    {

        if ($this->getStatus()) {
            if ($this->getTipo() == 'CC') {

                $this->setSaldo($this->getSaldo() - 12);
            } else {

                $this->setSaldo($this->getSaldo() - 20);
            }
        } else {

            echo "<p>Problemas com a conta, não posso cobrar!</p>";
        }
    }

    // INICIO METODOS GETTERS AND SETTERS

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
