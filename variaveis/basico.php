<div class="titulo">Básico</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';

$soma = $numeroA + 7;
$nada = null;
echo $soma, '<br>';
echo isset($soma), '<br>'; //1
echo isset($nada), '<br>'; // vazio não imprime nada
unset($soma); //1
echo var_dump($soma), '<br>'; // NULL

echo '<p>Arredondar</p>';
$numeroB = 3.2;
echo round($numeroB), '<br>';
echo ceil($numeroB), '<br>';

echo '<p>Atribuições</p>';
$variavel = 10;
echo $variavel, '<br>';
$variavel += 5;
echo $variavel, '<br>';
$variavel = 'Agora sou uma string!';
var_dump($variavel); echo '<br>';
echo $variavel, '<br>';

// Nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar acentos
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<p>Variáveis pré-definidas</p>';

echo $_SERVER; //Array
//var_dump($_SERVER); //Array
echo '<br>'. $_SERVER['HTTP_HOST']; //localhost