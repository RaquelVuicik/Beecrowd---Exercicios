<?php

fscanf(STDIN, "%d\n", $tempoGastoViagem);
fscanf(STDIN, "%d\n", $velocidadeMedia);

$distanciaPercorrida = $tempoGastoViagem * $velocidadeMedia;

$quantidadeLitros = $distanciaPercorrida / 12;

echo number_format($quantidadeLitros, 3) . "\n";
