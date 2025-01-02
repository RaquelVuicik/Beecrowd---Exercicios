<?php

fscanf(STDIN, "%f %f %f\n", $A, $B, $C);

if ($A == 0.0) {
    echo "Impossivel calcular\n";
    return;
}

$delta = ($B*$B)-((4*$A)*$C);

if ($delta < 0) {
    echo "Impossivel calcular\n";
    return;
}

$raiz1 = (-$B + sqrt ($delta)) / (2 * $A);
$raiz2 = (-$B - sqrt ($delta)) / (2 * $A);

echo "R1 = " . number_format($raiz1, 5, ".", "") . "\n";
echo "R2 = " . number_format($raiz2, 5, ".", "") . "\n";
