<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!';
echo '<br>' . constant('TAXA_DE_JUROS') . '!';

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;

define('NOVISSIMA_TAXA', $valorVariavel);
echo '<br>' . NOVISSIMA_TAXA;

// const NOVISSIMA_TAXA = $valorVariavel; Não é possível
// const NOVISSIMA_TAXA = 2.8 + 1.2;
// echo '<br>' . NOVISSIMA_TAXA;

// Constantes padrão do PHP
echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br> Linha :' . __LINE__;
echo '<br> Arquivo :' . __FILE__;
echo '<br> Diretório :' . __DIR__;

