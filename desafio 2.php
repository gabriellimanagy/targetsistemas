<?php
// Enunciado da questão.
/*
 * 2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

IMPORTANTE:
Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;
*/

//Escolha aqui o valor para ver se ele faz parte ou não da sequencia fibonnacci
$valorescolhido = 100;

//Definindo variaveis necessárias para execução
$somadoratual = 1;
$somadoraux = 0;
$ultimoresultado = 0;
$fibonnacci = array();

while ($ultimoresultado <= $valorescolhido)
{
    $ultimoresultado = $somadoratual + $somadoraux;

    $somadoraux = $somadoratual;
    $somadoratual = $ultimoresultado;
    array_push($fibonnacci,$ultimoresultado);
}
// E a mágica acontece ( *o*)
$existesequencia = array_search($valorescolhido, $fibonnacci);
echo ($existesequencia <> 0 ? "O valor escolhido existe na sequência." : "O valor escolhido não existe na sequência.") . PHP_EOL;
print_r($fibonnacci);

