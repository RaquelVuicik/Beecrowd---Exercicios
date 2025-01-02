<?php

fscanf(STDIN, "%d %d %d %d\n", $A, $B, $C, $D);

if ($B > $C && $D > $A && ($C + $D) > ($A + $B) && ($C && $D >= 0) && ($A % 2 == 0)) {
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}