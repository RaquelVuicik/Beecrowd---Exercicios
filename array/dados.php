<?php

include __DIR__.'/styles.php';

echo '<h1>Manipulação de dados</h1>';

echo '<h2>Array Unique</h2>';
// Seleciona dados unicos.

$array = [
    10,
    11,
    11,
    12,
    15,
    15
];

echo "<pre>";
print_r(array_unique($array));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Filter</h2>';
// Filtra as informações que não são null

$array = [
    'nome' => 'William Costa',
    'canal' => 'WDEV',
    'instagram' => false,
    'novo' => 0,
    'novo2' => null
];

echo "<pre>";
print_r(array_filter($array));
echo "</pre>";

$filter = array_filter($array, function($value){
    return !is_null($value);
});

echo "<pre>";
print_r($filter);
echo "</pre>";

echo '<hr>';


echo '<h2>Array Diff</h2>';
// Compara e mostra a diferença entre os arrays; A ordem importa.

$arrayA = [
    10,
    15,
    25
];

$arrayB = [
    10,
    17,
    22,
    26
];

echo "<pre>";
print_r(array_diff($arrayA, $arrayB));
echo "</pre>";

echo "<pre>";
print_r(array_diff($arrayB, $arrayA));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Intersect</h2>';
// Seleciona e exibe valores em comum entre os arrays.

echo "<pre>";
print_r(array_intersect($arrayA, $arrayB));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Column</h2>';
// Obtem informação dentro das posições ex.: 'id'.

$array = [
    [
        'id' => 1,
        'nome' => 'William',
        'idade' => 24
    ],
    [
        'id' => 2,
        'nome' => 'Alberto',
        'idade' => 22
    ],
    [
        'id' => 3,
        'nome' => 'Maria',
        'idade' => 36
    ],
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
print_r(array_column($array, 'id'));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Combine</h2>';
// Importante: os dois arrays precisam ter o mesmo tamanho 
// para o array combine funcionar.

$arrayA = [
    1,
    10,
    22
];

$arrayB = [
    'a',
    'c',
    'd'
];

echo "<pre>";
print_r($arrayA);
echo "</pre>";

echo "<pre>";
print_r($arrayB);
echo "</pre>";

echo "<pre>";
print_r(array_combine($arrayA, $arrayB));
echo "</pre>";

echo "<pre>";
print_r(array_combine($arrayB, $arrayA));
echo "</pre>";

echo '<h2>Array Combine + Array Column</h2>';
// Usando Array Combine + Array Column

$array = [
    [
        'id' => 1,
        'nome' => 'William',
        'idade' => 24
    ],
    [
        'id' => 2,
        'nome' => 'Alberto',
        'idade' => 22
    ],
    [
        'id' => 3,
        'nome' => 'Maria',
        'idade' => 36
    ],
];

$keys = array_column($array, 'id');
$values = array_column($array, 'nome');

echo "<pre>";
print_r(array_combine($keys, $values));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Merge</h2>';
// Cuidado ao utilizar com array associativo se tiver a chave 
// duplicada pode sobrescrever os valores; 
// ex.: arrayA [key = 'nome' value = 'joao']
// arrayB [key = 'nome' value = 'maria] sobrescreverá joao por maria.

$arrayA = [
    'William',
    'Alberto',
    'Maria'
];

$arrayB = [
    'Alfredo',
    'Bruno'
];

echo "<pre>";
print_r($arrayA);
echo "</pre>";

echo "<pre>";
print_r($arrayB);
echo "</pre>";

echo "<pre>";
print_r(array_merge($arrayA, $arrayB));
echo "</pre>";

echo '<hr>';


