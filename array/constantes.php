<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS = 'teste';
// FRUTAS[0] = 'Banana';
// FRUTAS[] = 'Banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = 'M4 Competition';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Francisco Morato'));
// CIDADES[0] = 'Caieiras';
echo '<br>' . CIDADES[1];