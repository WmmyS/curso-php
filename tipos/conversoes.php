<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<p>Int para float</p>';
echo '<br>', var_dump(PHP_INT_MAX + 1);
echo '<br>', var_dump(1 + 1.0);
echo '<br>', var_dump((float) 3);

// float para int
echo '<p>Float para int</p>';
echo '<br>', var_dump((int) 6.8);
echo '<br>', var_dump((int) 6.8);
echo '<br>', var_dump((int) -6.8);
echo '<br>', var_dump(intval('110010', 2)); # valores binários
echo '<br>', var_dump(intval('ff', 16)); # valores hexadecimais
echo '<br>', var_dump(intval(2.8), 10); # valores decimais
echo '<br>', var_dump(intval(2.8)); # valores decimais, 10 é default
echo '<br>', var_dump((int) round(2.8)); # arredonda para 3

// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); //5
echo '<br>', var_dump("3" + 2); //5
echo '<br>', var_dump("3" . 2); //32
echo '<br>', is_string("3" . 2); //true
//echo '<br>', is_string("3" + 2); //false
//echo '<br>', var_dump(1 + "cinco"); //1
//echo '<br>', var_dump(1 + "5 cinco"); //6
//echo '<br>', var_dump(1 + "cinco 5"); //1
//echo '<br>', var_dump(1 + "2+5"); //3
//echo '<br>', var_dump(1 + "3.2"); //4.2
echo '<br>', var_dump(1 + "-3.2e2"); //-319
echo '<br>', var_dump((int) "10.5"); //10
echo '<br>', var_dump((float) "10.5"); //10.5
