<div class="titulo">Valor vs Referência</div>

<?php

//Atribuição por valor
$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br>$variavelValor";

$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "<br>$variavelValor";

//Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';

echo "<br>$variavel";
echo "<br>$variavelReferencia";