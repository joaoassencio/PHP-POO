<?php

namespace Tecfi\Devtests;

use Tecfi\Devtests\Contratos\DadosContaBancaria;
use Tecfi\Devtests\Contratos\OperacoesContaBancaria;

abstract class ContaBancaria implements DadosContaBancaria, OperacoesContaBancaria
{
    // Atributos
    protected string $banco;
    protected string $nomeTitular;
    protected string $numeroAgencia;
    protected string $numeroConta;
    protected float $saldo;

    // Construtor
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    )
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getBanco(): string
    {
        return $this->banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    // Métodos
    public function exibirDados(): array
    {
        return
            [
                "Banco: " => $this->banco,
                "Nome do titular: " => $this->nomeTitular,
                "Número da agência: " => $this->numeroAgencia,
                "Número da conta: " => $this->numeroConta,
                "Saldo: " => $this->saldo
            ];
    }

    public abstract function obterSaldo(): string;

    public function depositar(float $deposito): string
    {
        $this->saldo += $deposito;
        return "Depósito de R$ " . number_format($deposito, 2, ",", ".") . " realizado com sucesso!";
    }

    public function sacar(float $saque): string
    {
        $this->saldo -= $saque;
        return "Saque de R$ " . number_format($saque, 2, ",", ".") . " realizado com sucesso!";
    }
}