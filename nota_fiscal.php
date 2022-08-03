<?php
/*========================================= questão 1 ===================================================*/
$produto="celular positivo";
$quantidade=10;
$preco=500;
$total=$quantidade*$preco;
if ($quantidade<=5){
    $n=2;
}elseif ($quantidade>5 and $quantidade<=10) {
    $n=3;
}elseif($quantidade>10){
    $n=5;
}
$desconto=($preco/100)*$n;
$preco_total=$total-$desconto;
echo("
============= NOTA FISCAL ===============
Produto           : $produto
Quantidade(s)     : $quantidade
Preço por unidade : R$ $preco,00
Desconto          : $n %
Preço total       : R$ $preco_total,00");
