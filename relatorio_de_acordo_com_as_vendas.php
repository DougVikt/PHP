<?php
/*======================================== relatorio do funcionario de acordo com as vendas ======================================================*/
$salario=1300;
$carros_vendidos=12;
$preco_carro=51900;
$valor_total_das_vedas=$preco_carro*$carros_vendidos;
$bonus_de_vedas=($valor_total_das_vedas/100)*5;
$bonus_por_carro=($salario/100)*5;
$salario_final=$salario+($bonus_por_carro*$carros_vendidos)+$bonus_de_vedas;
echo "relatorio do funcionario cloclo :\nsalario fixo : R$ $salario,00\nnumero de carros vendidos : $carros_vendidos\nbonus de 5% por carro vendido : R$ $bonus_por_carro,00
valor total das vendas : R$ $valor_total_das_vedas,00\nbonus de 5% referente ao valor das vendas : R$ $bonus_de_vedas,00\n\ntotal final : R$$salario_final,00 ";
