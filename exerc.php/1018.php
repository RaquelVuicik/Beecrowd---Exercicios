<?php

fscanf(STDIN, "%d\n", $valor);

echo $valor . "\n";

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

$nota1 = 1;
$quantidadeNota1 = 0;

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
while ($valor >= $nota1) {
    $valor -= $nota1;
    $quantidadeNota1++;
}


echo $quantidadeNota100 . " nota(s) de R$ 100,00\n";
echo $quantidadeNota50 . " nota(s) de R$ 50,00\n";
echo $quantidadeNota20 . " nota(s) de R$ 20,00\n";
echo $quantidadeNota10 . " nota(s) de R$ 10,00\n";
echo $quantidadeNota5 . " nota(s) de R$ 5,00\n";
echo $quantidadeNota2 . " nota(s) de R$ 2,00\n";
echo $quantidadeNota1 . " nota(s) de R$ 1,00\n";
