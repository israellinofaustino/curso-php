<div class="titulo">$_POST</div>

<form action="#" method="post"> <!-- o # serve como uma ancora -->
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="SELECIONE">SELECIONE</option>
        <option value="SP">São Paulo</option>
        <option value="BA">Bahia</option>
        <option value="AC">Acre</option>
        <option value="MG">Minas Gerais</option>
        <option value="RJ">Rio de Janeiro</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);


echo '<br>' . count($_POST);