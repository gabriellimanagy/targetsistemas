<?php
// Enunciado da questão.
/*
  3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
   • O menor valor de faturamento ocorrido em um dia do mês;
    • O maior valor de faturamento ocorrido em um dia do mês;
    • Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

IMPORTANTE:
a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;
*/

$faturamentoDiario = json_decode(file_get_contents("dados.json"));
$valores = array();
$diasSuperouMedia = 0;

foreach ($faturamentoDiario as $day_val)
{
    if($day_val->valor == 0)
    {
        continue;
    }

    array_push($valores,$day_val->valor);
}
$mediaMes = round(array_sum($valores) / sizeof($valores),2) ;

foreach ($valores as $valor)
{
    $diasSuperouMedia += ($valor > $mediaMes ?  1 : 0);
}

$valorMinimo = round(min($valores),2);
$valorMaximo = round(max($valores),2);

echo <<<DELIMITADOR
    No dia com pior faturamento, o valor foi de: $valorMinimo, 
    e no dia com melhor faturamento o valor foi de: $valorMaximo.
    
    Tivemos $diasSuperouMedia dias em que superamos a média mensal. 
DELIMITADOR;
