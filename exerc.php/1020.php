<?php

fscanf(STDIN, "%d\n", $idadePessoa);

$anos = floor($idadePessoa / 365);
$meses = floor(($idadePessoa % 365) / 30);
$dias = floor($idadePessoa % 365) % 30;

echo $anos . " ano(s)\n";
echo $meses . " mes(es)\n";
echo $dias . " dia(s)\n";

// 2 opção usando while

// fscanf(STDIN, "%d\n", $idadePessoa);

// $anos = 0;
// $meses = 0;
// $dias = 0;

// Calculando os anos com o laço while
// while ($idadePessoa >= 365) {
//     $anos++;
//     $idadePessoa -= 365;
// }

// Calculando os meses com o laço while
// while ($idadePessoa >= 30) {
//     $meses++;
//     $idadePessoa -= 30;
// }

// O restante são os dias
// $dias = $idadePessoa;

// echo $anos . " ano(s)\n";
// echo $meses . " mes(es)\n";
// echo $dias . " dia(s)\n";