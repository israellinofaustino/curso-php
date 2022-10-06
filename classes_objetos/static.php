<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStat = 'Variavel de instancia';
    public static $static = 'Variavel de classe (estatica)';

    public function mostrarA() {
        echo "Não estatica = {$this->$naoStat}<br>";
        // Tentativa 01
        // echo "Estática = {$this->$static}<br>";
        
        // Tentativa 02
        // echo "Estática = {self::$static}<br>";

        // Tentativa 03
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA(){
        // echo "Não estática = {$this->$naoStat}<br>"; // $this não funciona em uma função static
        // echo "Estática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // acessar diretamente pela classe
A::mostrarStaticA(); // modo de acessar uma função static

A::$static = "Alterando membro de classe";
echo A::$static, '<br>';