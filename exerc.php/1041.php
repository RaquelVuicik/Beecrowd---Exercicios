<?php

fscanf(STDIN, "%f %f\n", $x, $y);

if ($x > 0 && $y > 0) {
    echo "Q1\n";
} elseif ($x < 0 && $y > 0) {
    echo "Q2\n";
} elseif ($x < 0 && $y < 0) {
    echo "Q3\n";
} elseif ($x > 0 && $y < 0) {
    echo "Q4\n";
} elseif ($x == 0 && $y == 0) {
    echo "Origem\n";
} elseif ($x && $y == 0) {
    echo "Eixo X\n";
} elseif ($y && $x == 0) {
    echo "Eixo Y\n";
}
