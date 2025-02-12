<?php

include __DIR__.'/styles.php';

echo '<h1>Funções de Arrays - Parte 2</h1>';

echo '<h2>Range</h2>';
// Usada para criar um array com base em uma faixa de dados.

$array = range(1,11,2);
echo "<pre>";
print_r($array);
echo "</pre>";

$array = range('a','f', 2);
echo "<pre>";
print_r($array);
echo "</pre>";

//--------------------------------------------
echo '<hr>';
//--------------------------------------------

echo '<h2>Array Map</h2>';

$array = [
    [
        'id' => 10,
        'nome' => 'Willian Costa'
    ],
    [
        'id' => 11,
        'nome' => 'Canal WDEV'
    ],
];

function toUpperName($item) {
    $item['nome'] = mb_strtoupper($item['nome']);
    $item['contador'] = strlen($item['nome']);
    return $item;
}

echo "<pre>";
print_r($array);
echo "</pre>";

$array = array_map('toUpperName', $array);

echo "<pre>";
print_r($array);
echo "</pre>";

//--------------------------------------------
echo '<hr>';
//--------------------------------------------

echo '<h2>Array Reduce</h2>';
// Utilizado para fazer a soma de um array mais complexo.

$array = [
    [
        'id' => 1,
        'nome' => 'Produto 1',
        'valor' => 10.00
    ],
    [
        'id' => 2,
        'nome' => 'Produto 2',
        'valor' => 5.00
    ],
    [
        'id' => 3,
        'nome' => 'Produto 3',
        'valor' => 5.00
    ],
];

echo "<pre>";
print_r($array);
echo "</pre>";

function sum($total, $item){
    $total += $item['valor'];
    return $total;
}

$total = array_reduce($array,'sum');

echo "<pre>";
print_r('Total: '.$total);
echo "</pre>";

//--------------------------------------------
echo '<hr>';
//--------------------------------------------

echo '<h2>Array Sum</h2>';
// Utilizado para fazer a soma de um array simples numérico.

$array = [10,5,4,2];

echo "<pre>";
print_r($array);
echo "</pre>";

$total = array_sum($array);

echo "<pre>";
print_r('Total: '.$total);
echo "</pre>";

//--------------------------------------------
echo '<hr>';
//--------------------------------------------


echo '<h2>List</h2>';

$array = [
    'uva',
    'vermelho',
    'alegria'
];

echo "<pre>";
print_r($array);
echo "</pre>";

list($fruta,$cor,$sentimento) = $array;

echo "<pre>";
print_r('Fruta: '.$fruta);
echo "</pre>";

echo "<pre>";
print_r('Cor: '.$cor);
echo "</pre>";

echo "<pre>";
print_r('Sentimento: '.$sentimento);
echo "</pre>";