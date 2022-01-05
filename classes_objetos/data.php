<div class="titulo">Classe Data</div>
<?php

class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function mostrar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$dataAniver = new Data();
$dataAniver->dia = 13;
$dataAniver->mes = 10;
$dataAniver->ano = 1997;

$dataCasamento = new Data();
$dataCasamento->dia = 23;
$dataCasamento->mes = 11;
$dataCasamento->ano = 2019;


echo $dataAniver->mostrar(), '<br>';
echo $dataCasamento->mostrar(), '<br>';

?>