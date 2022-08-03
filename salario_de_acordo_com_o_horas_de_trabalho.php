<?php
/*====================================== salario de acordo com o horas de trabalho ===========================================*/
$nome="cloclo";
$ganho_por_hora=10;
$hora_por_semana=40;
$acrescimo=($ganho_por_hora/100)*50;
$hora_por_mes=$hora_por_semana*4;
$salario=($hora_por_mes*$ganho_por_hora);
$salario_total=$salario+($acrescimo+$ganho_por_hora)*15;
echo("=== TABELA DE SALARIO ===
funcionario $nome :
Horas de trabalho no mês padraão : $hora_por_mes horas
Ganho por hora : R$ $ganho_por_hora,00 
Horas extras : 15 horas 
Salario : R$ $salario,00 
Salario total : R$ $salario_total,00");
