<?php

fscanf(STDIN, "%f %f %f %f\n", $n1, $n2, $n3, $n4);
fscanf(STDIN, "%f\n", $nExame);

$media1 = $n1 * 2;
$media2 = $n2 * 3;
$media3 = $n3 * 4;
$media4 = $n4 * 1;

$mediaTotal = ($media1 + $media2 + $media3 + $media4) / 10;
$mediaTotal = floor(($mediaTotal*100))/100;

echo "Media: " . number_format($mediaTotal, 1, ".", "") . "\n";

if ($mediaTotal >= 7.0) {
    echo "Aluno aprovado.\n";
} elseif ($mediaTotal < 5.0) {
    echo "Aluno reprovado.\n";
} elseif ($mediaTotal >= 5.0 && $mediaTotal <= 6.9) {
    echo "Aluno em exame.\n";
    echo "Nota do exame: " . number_format($nExame, 1, ".", "") . "\n";
    $novaMedia = ($nExame + $mediaTotal) / 2;
    if ($novaMedia >= 5.0) {
        echo "Aluno aprovado.\n";
        echo "Media final: " . number_format($novaMedia, 1, ".", "") . "\n";
    } else {
        echo "Aluno reprovado.\n";
        echo "Media final: " . number_format($novaMedia, 1, ".", "") . "\n";
    }
}
