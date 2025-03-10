<?php

include __DIR__.'/styles.php';

echo '<h1>7 dicas - Arrays em PHP</h1>';

echo '<hr>';

echo '<h2>1 - Extract</h2>';

$array = [
    'nome' => 'Willian Costa',
    'canal' => 'WDEV',
    'email' => 'teste@teste.com.br'
];

echo "<pre>";
print_r($array);
echo "</pre>";

extract($array,EXTR_PREFIX_ALL,'wdev');

echo "<pre>";
print_r($wdev_nome);
echo "</pre>";

echo "<pre>";
print_r($wdev_canal);
echo "</pre>";

echo "<pre>";
print_r($wdev_email);
echo "</pre>";

//--------------------------------------------
echo '<hr>';
//--------------------------------------------


echo '<h2>2 - Compact</h2>';
// Para criar um array apartir de variaveis.

$Rua = 'Rua Teste';
$NUMERO = '10';
$bairro = '';
$cidade = 'São Paulo';
$uf = 'SP';
$cep = '12345-678';
$complemenTO = 'Sala 1';

$array = compact('Rua',
                'NUMERO',
                'bairro',
                'cidade',
                'uf',
                'cep',
                'complemenTO');

echo "<pre>";
print_r($array);
echo "</pre>";

//--------------------------------------------
echo '<hr>';
//--------------------------------------------


echo '<h2>3 - Concatenação condicional de valores</h2>';

$endereco = $rua. ' - '.$numero.' - '.$bairro;

echo "<pre>";
print_r($endereco);
echo "</pre>";

$endereco = implode(' - ',array_filter($array));

echo "<pre>";
print_r($endereco);
echo "</pre>";

//--------------------------------------------
echo '<hr>';
//--------------------------------------------

// echo '<h2>4 - Chaves maiúsculas e minúsculas</h2>';

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo "<pre>";
// print_r($array_change_key_case($array,CASE_LOWER));
// echo "</pre>";

// echo "<pre>";
// print_r($array_change_key_case($array,CASE_UPPER));
// echo "</pre>";

