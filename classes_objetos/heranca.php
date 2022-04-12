<div class="titulo">Herança</div>
<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa criada! <br>';
    }

    function __destruct(){
        echo 'Pessoa diz: Tchau!<br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuario Criado!<br>';
    }
    function __destruct() {
        echo 'Usuario diz: Tchau! <br>';
        parent::__destruct();
    }

    function apresentar(){
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Israel Lino', 24, 'israel_lino');
$usuario->apresentar();
unset($usuario);