<?php

declare(strict_types=1);

namespace Tecfi\Devtests\tipoContas;

use Tecfi\Devtests\ContaBancaria;

class ContaCorrente extends ContaBancaria
{
    // Atributos
    const TAXA = 25;
    const TIPO_CONTA = "Conta corrente";

    //
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    )
    {
        self::
    }
}