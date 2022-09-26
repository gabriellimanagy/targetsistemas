<?php
// Enunciado da questão.
/*
5) Escreva um programa que inverta os caracteres de um string.

IMPORTANTE:
a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;
b) Evite usar funções prontas, como, por exemplo, reverse;

*/

//Escolha aqui o valor para ver se ele faz parte ou não da sequencia fibonnacci
$valorescolhido = "Valor a ser invertido";

//Transforma a string em array.
$array = str_split($valorescolhido);

//Ordena a array de formadecrescente.
krsort($array);

//Reconstrói a string.
foreach ($array as $frase)
{
    echo $frase;
}
//Extra: Decidi utilizar dessa forma e não com a extensão mb_string para não utilizar
//de extensões não Default da linguagem.