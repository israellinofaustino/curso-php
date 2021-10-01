<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome"=> "Israel",
        "idade"=> 23,
        "nacionalidade" => "São Paulo"
    ],
    [
        "nome" => "Samara",
        "idade" => 24,
        "nacionalidade" => "Maceió"
    ],
];

print_r($dados);

echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados [] = [
    "nome" => "Gustavo",
    "idade" => 19,
    "nacionalidade" => "Bahia"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"]= "Chaves";
echo "<br>";
print_r($dados[2]);

unset($dados[1]);
echo "<br>";
print_r($dados);
var_dump($dados[1]); // return NULL because not exist more