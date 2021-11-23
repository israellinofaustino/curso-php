<div class="titulo">Laço For</div>

<?php
for($count = 1; $count <= 5; $count++){
    echo"$count <br>";
}

echo "<hr>";

for(; $count <= 10; $count++){
    echo "$count <br>";
}

echo "<hr>";

for(; $count <= 15 ;){
    echo"$count <br>";
    $count++;
}

$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

print_r($array);

echo "<hr>";

for($i = 1; $i <= count($array); $i++){
    echo"{$array[$i]} <br>";
}

$matrix = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

echo "<hr>";

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo"{$matrix[$i][$j]} ";
    }
    echo"<br>";
}