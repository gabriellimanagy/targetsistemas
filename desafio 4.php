<?php
// Enunciado da questão.
/* 4) Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:

SP – R$67.836,43
RJ – R$36.678,66
MG – R$29.229,88
ES – R$27.165,48
Outros – R$19.849,53

Escreva um programa na linguagem que desejar onde calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora.
 

*/

$estados = array(
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
);
print_r($estados);

$valorTotal = array_sum($estados);
echo "Valor total: " . $valorTotal . PHP_EOL . PHP_EOL;
echo "Percentual representativo de cada estado: " . PHP_EOL . PHP_EOL;
foreach ($estados as $valor)
{
    echo array_search($valor,$estados) . " - " .
         round($valor * 100 / $valorTotal,2) . "% ". PHP_EOL  ;
}





