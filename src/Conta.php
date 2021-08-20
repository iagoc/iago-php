<?php

class Conta
{
    //Propriedades sempre privadas e métodos privadas quando necessário.
    private $cliente;
    private float $saldo;
    private static int $numeroContas = 0;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->saldo = 0;

        self::$numeroContas++;  //self = Conta
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    function sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valor;
    }

    function depositar(float $valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return;
        }

        echo "Digite um valor válido.";
    }

    public function transferir(float $valor, conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }

    public function getSaldo()
    {
        return $this->saldo;
    }


    public static function getNumeroContas(): int
    {
        return self::$numeroContas;
    }
}
