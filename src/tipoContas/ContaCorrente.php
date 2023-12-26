<?php

declare(strict_types=1);

namespace Tecfi\Devtests\tipoContas;

use Tecfi\Devtests\ContaBancaria;

class ContaCorrente extends ContaBancaria
{
    // Atributos
    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

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
        return "Saldo atual: R$ " . number_format(($this->saldo - self::TAXA), 2, ",", ".");
    }
}