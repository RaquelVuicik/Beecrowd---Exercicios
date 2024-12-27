<?php

fscanf(STDIN, "%d\n", $valorTempoTotal);

$horas = floor($valorTempoTotal / 3600);
$minutos = floor(($valorTempoTotal - ($horas * 3600)) / 60);
$segundos = floor($valorTempoTotal % 60);

echo $horas . ":" . $minutos . ":" . $segundos . "\n";
