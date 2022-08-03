<?php
/*====================================== soma dos numeros entre dois valores ===================================*/
$valor1=3;
$valor2=8;
$ar=[];
for ($n=1;$n<=($valor2-$valor1);$n++){
    $ar[$n]=$n+$valor1;
}
echo(array_sum($ar)+$valor1);
