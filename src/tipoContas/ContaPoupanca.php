<?php

namespace Tecfi\Devtests\tipoContas;

use Tecfi\Devtests\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    // Atributos
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

    // Construtor
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    )
    {
        parent::__construct(
            $banco,
            $nomeTitular,
            $numeroAgencia,
            $numeroConta,
            $saldo
        );
    }

    public function obterSaldo(): string
    {
        return "Saldo atual: R$ " . number_format(($this->saldo + ($this->saldo * self::RENDIMENTO)), 2, ",", ".");
    }
}