<?php

include __DIR__.'/styles.php';

echo '<h1>Ordenação</h1>';

echo '<h2>Sort</h2>';
// Coloca os valores na ordem crescente, altera as chaves.

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Asort</h2>';
// Coloca os valores em ordem crescente, porém mantém as chaves.

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

asort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Rsort</h2>';
// Coloca os valores na ordem decrescente, altera as chaves.

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Arsort</h2>';
// Coloca os valores em ordem decrescente, porém mantém as chaves.

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

arsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Ksort</h2>';
// Para ordenar as chaves em crescente.

$array = [
    'nome' => 'Willian',
    'canal' => 'WDEV',
    'a' => 'b'
];

echo "<pre>";
print_r($array);
echo "</pre>";

ksort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Krsort</h2>';
// Para ordenar as chaves em decrescente.

$array = [
    'nome' => 'Willian',
    'canal' => 'WDEV',
    'a' => 'b'
];

echo "<pre>";
print_r($array);
echo "</pre>";

krsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Usort</h2>';
// Para ordenar os valores em crescente, altera as chaves.

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

usort($array, function($a,$b){
    //SÃO IGUAIS
    if($a['idade'] == $b['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1; // para decrescente alterar 1 : -1
});

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Uasort</h2>';
// Para ordenar os valores em crescente e manter as chaves.

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

uasort($array, function($a,$b){
    //SÃO IGUAIS
    if($a['idade'] == $b['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1;
});

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Shuffle</h2>';
// Ordena de forma aleatória os valores do array.

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacaxi'
];

echo "<pre>";
print_r($array);
echo "</pre>";

shuffle($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Natsort</h2>';

$array = [
    '10.0v',
    '1.0v',
    '2.0v',
];

echo "<pre>";
print_r($array);
echo "</pre>";

natsort($array); // Case sensitivo usar: natcasesort()

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';
