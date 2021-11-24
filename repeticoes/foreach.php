<div class="titulo">Foreach</div>

<?php
$array=[1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach ($array as $diadasemana){
    echo "$diadasemana <br>";
}

echo "<hr>";

foreach ($array as $indice => $diadasemana) {
    echo "$indice => $diadasemana <br>";
}

$matrix = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

echo "<hr>";

foreach ($matrix as $linha) {
    # echo "$linha <br>";
    foreach ($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) { # with & I can get the key of array
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);