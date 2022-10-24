<div class="titulo">Operadores relacionais</div>

<?php
echo '<p class="divisao">Relacionais</p><hr>';
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 <> 1); // false
var_dump(1 != 1); // false
var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true


echo '<p style="margin-botton: -2px;">Relacionais no if/Else</p><hr>';
$idade = 70;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(5 <=> 3); // 1
var_dump(50 <=> 50); // 0
var_dump(5 <=> 50); // -1

?>

<style>
    p{
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>
