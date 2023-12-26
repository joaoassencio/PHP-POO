<?php

declare(strict_types=1);

namespace Tecfi\Devtests\Contratos;

interface DadosContaBancaria
{
    public function getBanco(): string;
    public function getNomeTitular(): string;
    public function getNumeroAgencia(): string;
    public function getNumeroConta(): string;
}