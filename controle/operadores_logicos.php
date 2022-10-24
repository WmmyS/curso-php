<div class="titulo">Operadores lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p class='divisao'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo "<p class='divisao'>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "<p class='divisao'>Tabela verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'F';
$pagouPrevidencia = true;

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco... -> $sexo";
}

echo '<br>';

if ($idade >= 60 && $sexo === 'F' || $pagouPrevidencia) {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco... -> $sexo";
}

echo '<br>';

if (($idade >= 60 && $sexo === 'F') xor $pagouPrevidencia) {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco... -> $sexo";
}


// formas de declarar o E
// && e and

// formas de declarar o OU
// || e or

// formas de declarar o OU Exclusivo
// xor

//Exemplo ou o Civic ou Corolla não os dois