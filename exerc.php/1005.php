<?php 

$A = (float) fgets (STDIN);
$B = (float) fgets (STDIN);

$notaA = 3.5;
$notaB = 7.5;

$valorRealProvaA = $notaA * ($A / 11);
$valorRealProvaB = $notaB * ($B /11);

$media = $valorRealProvaA + $valorRealProvaB;
$mediaFormatada = number_format($media, 5);

echo "MEDIA = $mediaFormatada\n";
