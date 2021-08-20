<?php
Class CPF
{
    private string $numero;

    public function __construct($numero)
    {
        $this->$numero = $numero;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): void
    {
        $this->$numero = $numero;
    }

}