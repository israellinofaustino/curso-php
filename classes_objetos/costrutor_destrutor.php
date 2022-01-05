<div class="titulo">Construtor e Destrutor</div>
<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo "Construtor Invocado!<br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    function __destruct() {
        echo "The end!<br>";
    }
    public function apresentar(){
        return "{$this->nome}, {$this->idade}";
    }
}

// $pessoa = new Pessoa(); // Error, é obrigatório passar os parametros nome e idade

$pessoaA = new Pessoa("Israel", 24);
$pessoaB = new Pessoa("Faustino"); // vai colocar a idade 18 porque eu defini como padrão

echo $pessoaA->apresentar(), ' anos. <br>';
unset($pessoaA); // o método destrutor vai ser chamado usando o unset

echo $pessoaB->apresentar(), ' anos. <br>';
$pessoaB = null; // o método destrutor vai ser chamado setando a variavel para null tambem


?>