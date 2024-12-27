<?php

fscanf(STDIN, "%f\n", $valor);

$nota100 = 100;
$quantidadeNota100 = 0;

$nota50 = 50;
$quantidadeNota50 = 0;

$nota20 = 20;
$quantidadeNota20 = 0;

$nota10 = 10;
$quantidadeNota10 = 0;

$nota5 = 5;
$quantidadeNota5 = 0;

$nota2 = 2;
$quantidadeNota2 = 0;

$moeda1 = 1;
$quantidadeMoeda1 = 0;

$moeda50 = 0.50;
$quantidadeMoeda50 = 0;

$moeda25 = 0.25;
$quantidadeMoeda25 = 0;

$moeda10 = 0.10;
$quantidadeMoeda10 = 0;

$moeda05 = 0.05;
$quantidadeMoeda05 = 0;

$moeda01 = 0.01;
$quantidadeMoeda01 = 0;

while ($valor >= $nota100) {
    $valor -= $nota100;
    $quantidadeNota100++;
}
while ($valor >= $nota50) {
    $valor -= $nota50;
    $quantidadeNota50++;
}
while ($valor >= $nota20) {
    $valor -= $nota20;
    $quantidadeNota20++;
}
while ($valor >= $nota10) {
    $valor -= $nota10;
    $quantidadeNota10++;
}
while ($valor >= $nota5) {
    $valor -= $nota5;
    $quantidadeNota5++;
}
while ($valor >= $nota2) {
    $valor -= $nota2;
    $quantidadeNota2++;
}

while ($valor >= $moeda1) {
    $valor -= $moeda1;
    $quantidadeMoeda1++;
}
while ($valor >= $moeda50) {
    $valor -= $moeda50;
    $valor = round($valor, 2);
    $quantidadeMoeda50++;
}
while ($valor >= $moeda25) {
    $valor -= $moeda25;
    $valor = round($valor, 2);
    $quantidadeMoeda25++;
}
while ($valor >= $moeda10) {
    $valor -= $moeda10;
    $valor = round($valor, 2);
    $quantidadeMoeda10++;
}
while ($valor >= $moeda05) {
    $valor -= $moeda05;
    $valor = round($valor, 2);
    $quantidadeMoeda05++;
}
while ($valor >= $moeda01) {
    $valor -= $moeda01;
    $valor = round($valor, 2);
    $quantidadeMoeda01++;
}

echo "NOTAS:\n";
echo $quantidadeNota100 . " nota(s) de R$ 100.00\n";
echo $quantidadeNota50 . " nota(s) de R$ 50.00\n";
echo $quantidadeNota20 . " nota(s) de R$ 20.00\n";
echo $quantidadeNota10 . " nota(s) de R$ 10.00\n";
echo $quantidadeNota5 . " nota(s) de R$ 5.00\n";
echo $quantidadeNota2 . " nota(s) de R$ 2.00\n";
echo "MOEDAS:\n";
echo $quantidadeMoeda1 . " moeda(s) de R$ 1.00\n";
echo $quantidadeMoeda50 . " moeda(s) de R$ 0.50\n";
echo $quantidadeMoeda25 . " moeda(s) de R$ 0.25\n";
echo $quantidadeMoeda10 . " moeda(s) de R$ 0.10\n";
echo $quantidadeMoeda05 . " moeda(s) de R$ 0.05\n";
echo $quantidadeMoeda01 . " moeda(s) de R$ 0.01\n";
