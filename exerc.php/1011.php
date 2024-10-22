<?php

$raio = (float) fgets(STDIN);

$pi = 3.14159;

$calculoVolume = (4/3) * $pi * $raio**3;

echo "VOLUME = " . number_format($calculoVolume, 3, ".", "") . "\n";

