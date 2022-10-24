<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); #problemas com acento
echo '<br>';

// concatenação
echo "Nós também" . ' somos' . '<br>';
echo "Também aceito", " virgulas", '<br>'; #No Echo tudo bem más o . que é concatenação

echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\"; // Isso chama scape "\"

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado'); // upercase
echo '<br>' . strtolower('MINIMIZADO'); // lowercase
echo '<br>' . ucfirst('só a primeira letra'); // uppercase
echo '<br>' . ucwords('todas as palavras'); // uppercase
echo '<br>' . strlen('Quantas letras?'); // Quantas letras?
//echo '<br>' . mb_strlen("Eu também", "utf-8"); // Quantas letras com caracteres especiais?
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte o último caractere não faz parte do resultado

echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); // Trocar isso isso