<?php
/*============================================== salario com reajuste ============================================================================*/
$salario=4000;
$reajuste=($salario/100)*5;
$novo_salario=$salario+$reajuste;
echo "\nseu salario é de R$ $salario,00 que teve um reajuste de 5% , salario final é de R$ $novo_salario,00";
