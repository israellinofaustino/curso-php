<div class="titulo">Desafio For</div>

<?php
$impressao = '';
for($i = 0; $i <= 5; $i++){
    $impressao .= '#';
    echo "$impressao <br>";
}

echo "<hr>";

for($imp = '#'; $imp !== '######'; $imp .= '#'){
    echo "$imp <br>";
}