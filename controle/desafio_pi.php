<div class="titulo">Desafio PI</div>

<?php

echo pi();
$pi = 3.14;
echo '<br>' . $pi;

if ($pi === pi()) {
    echo "<br> Iguais";
} else {
    echo "<br> Diferentes";
}

echo '<br>', var_dump($pi);
echo '<br>', var_dump(pi());

// Operador Relacional
$piErrado = 2.8;

echo '<br> Desafio <hr>';

echo '<br>' . ($piErrado - pi());
echo '<br>' . ($piErrado - pi()) <= 0.01;

if ($piErrado - pi() <= 0.01) {
    echo "<br> Praticamente iguais";
} else {
    echo "<br> Diferentes";
}