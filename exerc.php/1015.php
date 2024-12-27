<?php

fscanf(STDIN, "%f %f\n", $x1, $y1);
fscanf(STDIN, "%f %f\n", $x2, $y2);

$distancia = sqrt(($x2 - $x1)**2 + ($y2 - $y1)**2);

echo number_format($distancia, 4) . "\n";
