<?php

$numeros = fscanf(STDIN, "%d %d %d\n");

$maiorNumero = max($numeros);

// $maiorNumero = 0;

// foreach ($numeros as $numero) {
//     if ($numero > $maiorNumero) {
//         $maiorNumero = $numero;
//     }
// }

echo $maiorNumero . " eh o maior" . "\n";
