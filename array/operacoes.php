<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Israel",
    "idade" => 23
];

$dados2 = [
    "nacionalidade" => "São Paulo"
];

$dados2["endereço"] = "Rua 12";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

unset($dadosCompletos['nome']);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);
echo '<br>';
$decimais = array_merge($pares, $impares); // junta os 2 arrays numericos
echo '<br>';
print_r($decimais);


sort($decimais); // ordenação do array
echo '<br>';
print_r($decimais);
?>