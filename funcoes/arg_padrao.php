<div class="titulo">Argumento Padrão</div>
<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao('Meste', 'Supremo');

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida){
    echo "Para beber: $bebida <br>";
    echo "Para comer: $comida <br>";
}
anotarPedido2('Hamburguer'); // não vai funcionar, porque tem que passar os 2 parametros, pois o valor padrão está primeiro e não por ultimo
anotarPedido2('Refrigerante2', 'Pizza2');