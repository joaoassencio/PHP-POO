<?php

require __DIR__ . "/../vendor/autoload.php";

use Tecfi\Devtests\ContaBancaria;

$conta = new ContaBancaria(
    "Banco do Brasil",
    "João Assêncio",
    "123456-78",
    "321654-98",
    100
);

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

print_r($conta->exibirDados());