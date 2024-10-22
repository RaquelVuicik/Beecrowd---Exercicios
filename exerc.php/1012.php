<?php

fscanf(STDIN, "%f %f %f", $A, $B, $C);

$areaTrianguloRetangulo = ($A * $C) / 2;

$pi = 3.14159;
$raio = $C;
$areaCirculo = $pi * $raio**2;

$areaTrapezio = ($A + $B) * $C / 2;

$areaQuadrado = $B * $B;

$areaRetangulo = $A * $B;

echo "TRIANGULO: " . number_format($areaTrianguloRetangulo, 3, ".", "") . "\n";
echo "CIRCULO: " . number_format($areaCirculo, 3, ".", "") . "\n";
echo "TRAPEZIO: " . number_format($areaTrapezio, 3, ".", "") . "\n";
echo "QUADRADO: " . number_format($areaQuadrado, 3, ".", "") . "\n";
echo "RETANGULO: " . number_format($areaRetangulo, 3, ".", "") . "\n";