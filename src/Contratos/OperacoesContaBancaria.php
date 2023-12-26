<?php

declare(strict_types=1);

namespace Tecfi\Devtests\Contratos;

interface OperacoesContaBancaria
{
    public function depositar(float $valor): string;
    public function sacar(float $saque): string;
    public function obterSaldo(): string;
}