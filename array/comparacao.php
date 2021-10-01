<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Israel', 'idade' => 23];
$arr2 = ['nome' => 'Israel', 'idade' => 23];
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = [ 'idade' => 23, 'nome' => 'Israel'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo '<br>';
$arr4 = ['idade' => '23', 'nome' => 'Israel']; // o tipo do valor não influencia seja string ou numerico
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);