<?php

include __DIR__.'/styles.php';

echo '<h1>Funções</h1>';

$array = [
    'banana',
    'goiaba',
    'morango',
    'abacaxi'
];

$arrayAssociativo = [
    'nome' => 'William Costa',
    'canal' => 'WDEV',
    'instagram' => null
];


echo '<h2>Count</h2>';

echo "<pre>";
echo  count($array);
echo "</pre>";

echo "<pre>";
echo  count($arrayAssociativo);
echo "</pre>";

echo '<hr>';


echo '<h2>Array Keys</h2>';

echo "<pre>";
print_r(array_keys($array));
echo "</pre>";

// Criou uma lista ordenada com as posições 
// da lista ordenada;

echo "<pre>";
print_r(array_keys($arrayAssociativo));
echo "</pre>";

// Criou uma lista com as posições das strings;

echo '<hr>';


echo '<h2>Array Values</h2>';
//Para obter os valores do array

echo "<pre>";
print_r(array_values($array));
echo "</pre>";


echo "<pre>";
print_r(array_values($arrayAssociativo));
echo "</pre>";

echo '<hr>';


echo '<h2>In Array</h2>';

echo "<pre>";
var_dump(in_array('banana', $array));
echo "</pre>";

echo "<pre>";
var_dump(in_array('WDEV', $arrayAssociativo));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Search</h2>';

echo "<pre>";
print_r(array_search('abacaxi', $array));
echo "</pre>";

echo "<pre>";
print_r(array_search('WDEV', $arrayAssociativo));
echo "</pre>";

echo '<hr>';


echo '<h2>Isset</h2>';
// Cuidado: Isset não funciona bem com valores null no sistema.

echo "<pre>";
var_dump(isset($array[0]));
echo "</pre>";

echo "<pre>";
var_dump(isset($arrayAssociativo['instagram']));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Key Exists</h2>';
// Recomendado usar este ao invés de Isset.

echo "<pre>";
var_dump(array_key_exists(0, $array));
echo "</pre>";

echo "<pre>";
var_dump(array_key_exists('instagram', $arrayAssociativo));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Key First</h2>';

echo "<pre>";
echo array_key_first($arrayAssociativo);
echo "</pre>";

echo "<pre>";
echo reset(array_keys($arrayAssociativo));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Key Last</h2>';

echo "<pre>";
echo array_key_last($arrayAssociativo);
echo "</pre>";

echo "<pre>";
echo end(array_keys($arrayAssociativo));
echo "</pre>";

echo '<hr>';


echo '<h2>Array Flip</h2>';
// Observação: altera a posição entre valores e chaves;
// Não funciona com elementos null

echo "<pre>";
print_r(array_flip($array));
echo "</pre>";

echo '<hr>';


echo '<h2>Implode</h2>';

echo "<pre>";
echo implode(', ', $array);
echo "</pre>";

echo '<hr>';


echo '<h2>Explode</h2>';
// Usado para criar arrays apartir de strings.

echo "<pre>";
print_r(explode('a', 'bananas'));
echo "</pre>";

echo "<pre>";
print_r(explode(', ', 'banana, laranja, abacaxi'));
echo "</pre>";

echo '<hr>';

