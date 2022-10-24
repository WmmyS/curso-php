<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // Aspas simples não fazem interpolação
echo "<br> $numero + 1"; // aspas duplas resulve nomenete o nome da variável

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos"; // Referenciou outro opbjeto não declarado
echo "<br>Eu tenho 5 {$objeto}s"; // Concatenou o s
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; // A chave deve ser junto com a expressão {$objeto}s
echo "<br>Eu tinha 5 {$objeto}s mas perdi 3 {$objeto}s"; // A chave deve ser junto com a expressão {$objeto}s

// Não funciona interpolação de expressões