<div class="titulo">Desafio String</div>

<?php
// Enunciado:
// Avaliando os métodos da documentação da string, 
// qual o método que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?
echo strpos('!AbcaBcabc', 'abc'), '<br>';

echo strpos("!AbcaBcabc", 'abc', 1), '<br>';
echo stripos("!AbcaBcabc", 'abc', 1), '<br>'; # Ignora case sensitive

echo strpos(strtolower("!AbcaBcabc"), 'abc', 1), '<br>'; # Ignora case sensitive
echo strpos(mb_strtolower("!AbcaBcabc"), 'abc', 1), '<br>'; # Ignora case sensitive

// Resposta: stripos
// strpos é case sensitive
// stripos é case insensitive
