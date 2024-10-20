<?php

$nomeDoVendedor = (string) fgets (STDIN);
$salarioFixoVendedor = (float) fgets (STDIN);
$vendasEfetuadasVendedor = (float) fgets (STDIN);

$totalReceberVendasEfetuadas = $vendasEfetuadasVendedor * (15 / 100);

$totalAReceber = $salarioFixoVendedor + $totalReceberVendasEfetuadas;
$totalAReceber = number_format($totalAReceber, 2, ".", "");

echo "TOTAL = R$ $totalAReceber\n";
