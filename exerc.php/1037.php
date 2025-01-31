<?php

fscanf(STDIN, "%f\n", $valorEntrada);


if ($valorEntrada >= 0 && $valorEntrada <= 25) {
    echo "Intervalo [0,25]\n";
} elseif ($valorEntrada > 25 && $valorEntrada <= 50) {
    echo "Intervalo (25,50]\n";
} elseif ($valorEntrada > 50 && $valorEntrada <= 75) {
    echo "Intervalo (50,75]\n";
} elseif ($valorEntrada > 75 && $valorEntrada <= 100) {
    echo "Intervalo (75,100]\n";
} else {
    echo "Fora de intervalo\n";
}
