<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE; // No browser, TRUE is displayed as 1
echo '<br>';
echo FALSE;

echo '<br>', var_dump(TRUE);
echo '<br>', var_dump(FALSE);
echo '<br>', var_dump('false');
echo '<br>', is_bool(FALSE);
echo '<br>', is_bool('false');

// Fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>', var_dump((bool) 0); // apenas zero é false
echo '<br>', var_dump((bool) 20);
echo '<br>', var_dump((bool) -1);
echo '<br>', var_dump((bool) 0.0);
echo '<br>', var_dump((bool) 0.00000000000001);
echo '<br>', var_dump((bool) ""); // apenas string vazia é false
echo '<br>', var_dump((bool) " "); // true
echo '<br>', var_dump((bool) "0"); // false
echo '<br>', var_dump((bool) "00"); // true
echo '<br>', var_dump((bool) "false"); // true
