<div class="titulo">Desafio Impressão</div>
<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

foreach ($array as $key => $value) {
    if($key % 2 !== 0) continue;
    echo "$value <br>";
}
echo "<hr>";
for ($i=0; $i < count($array); $i++) { 
    if ($i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
}
?>