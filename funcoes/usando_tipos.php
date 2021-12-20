<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

// echo somar1(1,2) . '<br>';
// echo somar1(1.7, 2.5) . '<br>';
// echo somar1(1, '4dois') . '<br>';

function somar2(int $c, int $d) { // só pode usar a atribuição de tipos dentro de funções, fora de funções não funciona
    echo "<span>Somando $c + $d = </span>";
    return $c + $d;
}

// echo somar2(1,2) . '<br>';
// echo somar2(1.7, 2.5) . '<br>';
// echo somar2(1, '4dois') . '<br>';

function somar3($x, $y): int {
    echo "<span>Somando $x + $y = </span>";
    return $x + $y;
}
echo somar3(1,2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, '4dois') . '<br>';
