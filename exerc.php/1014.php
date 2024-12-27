<?php

fscanf(STDIN, "%d\n", $distanciaTotalPercorrida);
fscanf(STDIN, "%f\n", $totalCombustivelGasto);

if ($totalCombustivelGasto > 0) {
    $consumoMedio = $distanciaTotalPercorrida / $totalCombustivelGasto;
} else {
    $consumoMedio = 0;
}

echo number_format($consumoMedio, 3, ".", "") . " km/l" . "\n";
