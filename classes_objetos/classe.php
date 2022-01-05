<div class="titulo">Primeira Classe</div>
<?php
/* Classe VS Objeto
Uma classe é um molde, onde utilizando esse mesmo molde eu consigo
criar varios Objetos(Instância).
*/

class Cliente { // dentro de uma classe você tem atributos e comportamentos
    // atributos(dados)
    public $nome = 'Anônimo';
    public $idade = '18';

    public function apresentar() { // método(função)
        return "Nome: {$this->nome}, Idade: {$this->idade}";
    }
}
$cliente1 = new Cliente(); // Criando um Objeto(Sinonimo de Instância) da class Cliente usando o CONSTRUTOR
echo $cliente1->nome, '<br>';
$cliente1->nome = 'Israel Faustino';
echo $cliente1->nome, '<br>';
$cliente1->idade = 24;

$cliente2 = new Cliente(); // Criando outro Objeto(Sinonimo de Instância) da class Cliente usando o CONSTRUTOR
$cliente2->nome = 'Samara Delean';
$cliente2->idade = 23;

echo $cliente1->apresentar(), '<br>';
echo $cliente2->apresentar();
?>