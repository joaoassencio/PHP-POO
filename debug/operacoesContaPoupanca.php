<?php

require __DIR__ . "/../vendor/autoload.php";

use Tecfi\Devtests\tipoContas\ContaPoupanca;
use Tecfi\Devtests\Contratos\DadosContaBancaria;
use Tecfi\Devtests\Contratos\OperacoesContaBancaria;

function executarOperacoes(OperacoesContaBancaria $conta): void
{
    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(50);
    echo PHP_EOL;

    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->sacar(30);
    echo PHP_EOL;

    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo "----------------------------------------------------";
    echo PHP_EOL;
}

function exibirDados(DadosContaBancaria $conta): void
{
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;

    echo "Agência/Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "----------------------------------------------------";
    echo PHP_EOL;
}

$conta = new ContaPoupanca(
    "BRB",
    "João",
    "12345-78",
    "321654-87",
    100
);

exibirDados($conta);
executarOperacoes($conta);