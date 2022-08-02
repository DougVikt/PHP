<?php
/*=========================================== custo de compra de carro ===========================================================================*/
$fabrica=30000;
$destribuidor=($fabrica/100)*28;
$imposto=($fabrica/100)*45;
$preco_final=$fabrica+$imposto+$destribuidor;
echo "o preço de fabrica : $fabrica\ncusto de 28% da destribuidora : $destribuidor\ncusto do imposto de 45% : $imposto\npreço final da compra : $preco_final";

 
