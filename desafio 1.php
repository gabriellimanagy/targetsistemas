<?php
// Enunciado da questão.
/*
 *
1) Observe o trecho de código abaixo:

int INDICE = 13, SOMA = 0, K = 0;

enquanto K < INDICE faça
{
    K = K + 1;
    SOMA = SOMA + K;

    imprimir(SOMA);

    Ao final do processamento, qual será o valor da variável SOMA?
}
*/

// Definindo variaveis.
$indice = 13;
$soma = 0;
$k = 0;

// Repetição de acordo com enunciado.
while ($k < $indice)
{
    $k = $k+1;
    $soma = $soma+$k;

    echo $soma . PHP_EOL;
};

echo "Valor final após processamento: " . $soma;
