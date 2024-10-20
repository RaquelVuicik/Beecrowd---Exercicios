<?php

$A = (float) fgets (STDIN);
$B = (float) fgets (STDIN);
$C = (float) fgets (STDIN);

$notaA = 2;
$notaB = 3;
$notaC = 5;

$valorRealProvaA = $notaA * ($A / 10);
$valorRealProvaB = $notaB * ($B / 10);
$valorRealProvaC = $notaC * ($C / 10);

$media = $valorRealProvaA + $valorRealProvaB + $valorRealProvaC;
$mediaFormatada = number_format($media, 1);

echo "MEDIA = $mediaFormatada\n";
