<div class="titulo">Argumentos & Retorno</div>

<?php

function obterMensagem() {
    return "Seja bem vindo(a)!";
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo "<br>", obterMensagem();
echo "<br>";
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}
echo"<br>", obterMensagemComNome('Israel');
echo"<br>", obterMensagemComNome('Faustino');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 4;

echo "<br>", soma(1, 5);
echo "<br>", soma($x, $y);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo "<br>", $variavel; // aqui a variavel vai continuar com o mesmo valor "1" pois ela criou uma cópia e não modificou a variavel principal

function trocaValorDeVerdade(&$a, $novoValor) { // usando o & eu não estou passando a cópia do valor da variavel, mas sim o endereço da variavel para que ela possar ser modificada
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5000);
echo "<br>", $variavel;