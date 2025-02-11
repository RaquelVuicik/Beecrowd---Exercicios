<?php

include __DIR__.'/styles.php';

echo '<h1>Definição</h1>';

echo '<h2>Lista ordenada</h2>';

// Array com lista numerica ordenada

$array = [
    'banana',
    'goiaba',
    'morango'
];

//ATALHO DE DEBUG

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Array associativo</h2>';

// Array com chaves string

$array = [
    'nome' => 'William Costa',
    'idade' => 24,
    'canal' => 'WDEV'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


// Cuidado nunca implemente o array bagunçado é só para ter uma ideia do que da para fazer!

echo '<h2>Array bagunçado</h2>'; 

$array = [
    19 => 'teste',
    'nome' => 'William Costa',
    'idade' => 24,
    'canal' => 'WDEV',
    'banana',
    'goiaba',
    'morango'
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Adicionando valores na lista ordenada</h2>';

$array = [
    'banana',
    'goiaba',
    'morango'
];

$array[] = 'pera';
$array[5] = 'banana2'; // coloca o valor em um elemento especifico do array
$array[0] = 'uva'; // substitui o valor do elemento 0 no array

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Adicionando valores em um array associativo</h2>';

$array = [
    'nome' => 'William Costa',
    'idade' => 24,
    'canal' => 'WDEV'
];

$array['instagram'] = '@wdevoficial'; // posição que não existe é adicionada ao array
$array['canal'] = 'youtube.com/wdevoficial'; // posição que ja existe é substituido o valor.
$array[] = 'bagunça'; // array sem posição, cria bagunça.

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Array multidimensional</h2>';

$array = [
    'pessoas' => [
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
    ]
];

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

// Primeiro nível temos um array associativo (tem indice 'pessoas'), 
// pessoas também é um array só que de lista ordenada com vetores 
// (posições 0, 1 e 2), e dentro de cada posição temos um array associativo
// com os dados das pessoas.

echo '<h2>Obtendo valores dos arrays</h2>';

$array = [
    'pessoas' => [
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
    ]
];

echo "<pre>";
print_r($array['pessoas']);
echo "</pre>";

echo "<pre>";
print_r($array['pessoas'][0]);
echo "</pre>";

echo "<pre>";
print_r($array['pessoas'][0]['nome']);
echo "</pre>";

echo "<pre>";
print_r(json_encode($array));
echo "</pre>";
$json = json_encode($array);
echo "<pre>";
print_r(gettype($json));
echo "</pre>";

echo "<pre>";
print_r(json_decode($json,true));
echo "</pre>";