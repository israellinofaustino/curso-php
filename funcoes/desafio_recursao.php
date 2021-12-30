<div class="titulo">Desafio Recursão</div>
<?php
$array = [1, 2, [3, 4, 5], 6,[7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>'){
    foreach ($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}
imprimirArray($array);
echo '<br>';
imprimirArray($array, '#');