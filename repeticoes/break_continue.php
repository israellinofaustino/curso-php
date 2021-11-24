<div class="title">Break/Continue</div>
<?php
$cont = 10;
for(;;) {
    echo "$cont <br>";
    $cont++;
    if ($cont > 13) {
        break;
    }
}
echo "<br><hr>";
for(;;) {
    $cont++;
    if($cont % 2 === 1) continue;
    echo "$cont <br>";
    if ($cont >= 30) {
        break;
    }
}

echo "<br><hr>";

foreach (array(1,2,3,4,5,6) as $value) {
    if ($value === 5) break;
    if($value % 2 === 0) continue;
    echo "$values <br>";
}

echo "Fiiiiim";
?>