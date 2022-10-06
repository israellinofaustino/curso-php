<div class="titulo">Classe Abstrata</div>
<?php

abstract class Abstrata{ // o unico proposito de uma classe abstrata é ela ser herdada por uma classe não abstrata(classe normal)
    public abstract function metodo1();
    protected abstract function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1(){
        echo "Executando método 1 <br>";
    }

    public abstract function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1(){
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro){
        echo "Executando método 2, com parametro $parametro <br>";
    }

    public function metodo3(){
        echo "Executando método 3<br>";
        $this->metodo2('passando parametro interno');
    }
}

$c = new Concreta();
$c->metodo1();
// $c->metodo2('passando parametro externo'); // não acessa o método2 pq é protected, mas posso mudar para public se quiser acessar ele
$c->metodo3();

echo "<br>";
var_dump($c);

echo "<br>";
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
var_dump($c instanceof Abstrata);