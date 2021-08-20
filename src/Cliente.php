<?php
class Titular
{
    private CPF $cpf;
    private string $nome ;
    public function __construct(CPF $cpf, $nome)
    {
        $this->CPF = $cpf;
        $this->validaTitular($nome);
        $this->nome = $nome;
    }

    private function validaTitular(string $nome)
    {
        if(strlen($nome) < 5) {
            echo "nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}

