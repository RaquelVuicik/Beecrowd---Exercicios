<?php

fscanf(STDIN, "%d %d\n", $codigoItem, $quantItens);

if ($codigoItem == 1) {
    $valorItem = 4.00;
} elseif ($codigoItem == 2) {
    $valorItem = 4.50;
} elseif ($codigoItem == 3) {
    $valorItem = 5.00;
} elseif ($codigoItem == 4) {
    $valorItem = 2.00;
} elseif ($codigoItem == 5) {
    $valorItem = 1.50;
}

$valorTotalItens = $valorItem * $quantItens;

echo "Total: R$ " . number_format($valorTotalItens, 2, ".", "") . "\n";
