<?php

$numeroFuncionario = (int) fgets (STDIN);
$numeroHorasTrabalhadas = (int) fgets (STDIN);
$valorPorHoraTrabalhada = (float) fgets (STDIN);

$salario = $numeroHorasTrabalhadas * $valorPorHoraTrabalhada;
$salarioFormatado = number_format($salario, 2,".","");


echo "NUMBER = $numeroFuncionario\n";
echo "SALARY = U$ $salarioFormatado\n";