<?php

$linha1 = trim(fgets(STDIN));
$linha2 = trim(fgets(STDIN));

list($codigo1, $quantidade1, $valorUnitario1) = explode(" ", $linha1);
list($codigo2, $quantidade2, $valorUnitario2) = explode(" ", $linha2);

$totalPeca1 = $quantidade1 * $valorUnitario1;
$totalPeca2 = $quantidade2 * $valorUnitario2;

$valorTotal = $totalPeca1 + $totalPeca2;

echo "VALOR A PAGAR: R$ " . number_format($valorTotal, 2, ".","") . "\n";
