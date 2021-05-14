<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

echo '<br>';

var_dump(@$dados[0]); // retorna NULL
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    "6" => "f",
    "g",
    "8" => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i'; // atribuindo mais um valor para dentro do array
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j'; // atribuindo mais um valor para dentro do array
echo '<br>';
print_r($lista);

$lista[false] = 'tentei indexar com false'; // vai substituir o valor do indice [0] do array, porque false é igual a 0
echo '<br>';
print_r($lista);
$lista[true] = 'tentei indexar com true'; // vai substituir o valor do indice [1] do array, porque true é igual a 1
echo '<br>';
print_r($lista);