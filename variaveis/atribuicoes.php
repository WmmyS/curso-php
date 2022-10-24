<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';
var_dump($title);
$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 1;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>', var_dump($numero);
$numero--; // Operador unário
echo '<br>', var_dump($numero);
--$numero; // Pŕe-fixado
$numero-- ; // Pós-fixado

$result = $numero + 1; // Operador binário

echo '<br>', var_dump($result);
$numero = 20;
echo '<br>', var_dump($numero += 5); // $numero = $numero + 5
echo '<br>', var_dump($numero -= 5); // $numero = $numero - 5

$numero = 10;
$numero .= 4; // Apenas concatenando
echo '<br>', var_dump($numero);

$texto = 'Esse é um texto';
echo '<br>', var_dump($texto);
$texto = $texto . ' qualquer';
echo '<br>', var_dump($texto);
$texto .= ' de verdade';
echo '<br>', var_dump($texto);

$variavelInexistente = 'valor existente';
echo '<br>', var_dump($variavelInexistente);
$valor = $variavelInexistente ?? 'valor default'; //Igual Javascript
unset($variavelInexistente);
$outroValor = $variavelInexistente ?? 'valor default';
echo '<br>', var_dump($outroValor); // Valor default