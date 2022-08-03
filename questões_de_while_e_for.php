<?php
/*====================================== questões de while e for  ======================================*/
//-1-)Exiba 10 linhas de um texto qualquer

$n=1;
while ($n<=10){
    echo("\n$n => que dia lindo !");
    $n++;
}

//-2-)Exiba linhas de texto até um máximo informado pelo usuário 

$n=1;
$entrada=5;
while ($n<=$entrada){
    echo("\n$n => que dia lindo !");
    $n++;
}

//-3-)Exiba a soma de todos os números de 0 a 10 ; obs : so da certo se o ultimo valor for o resultado da multiplicação do primeiro  por 10,100 .... 

$valor_inicial=1;
$valor_final=10;
$soma=($valor_final/2)*($valor_final+$valor_inicial);
echo($soma);

//-4-)Exiba todos os números de 0 a 100;

$n=0;
while($n<=100){
    echo("\n$n");
    $n++;
}

//-5-)Exiba todos os números pares de 0 a 100;

$valor=0;
$n=0;
while($n<=100){
    $valor++;
    $n++;
    if($valor % 2==0){
        echo("\n$valor");
    }
}

//-6-)Exiba todos os pares de 500 até 10;

$valor=501;
$n=0;
while($n<=490){
    $valor--;
    $n++;
    if($valor % 2==0){
        echo("\n$valor");
    }
}

//-7-)Exiba a soma de todos os números ímpares de 0 a 100;

$valor=0;
$soma=[];
$n=0;
while($n<=100){
    $valor++;
    if ($valor%2!=0){
        $soma[$n]=$valor;
    }
    $n++;
}
echo(array_sum($soma));

//-8-)Exiba a soma de todos os números até o máximo informado pelo usuário

$valor_inicial=1;
$valor_final=30;
$soma=($valor_final/2)*($valor_final+$valor_inicial);
echo($soma);

//-9-)Sorteie números aleatórios de 0 a 50, imprima todos na tela e só pare quando o número sorteado for 37;

$n=0;
while($n<=1000){
  $numero=rand(1,50);
  echo("\n$numero");
  if ($numero==37){
      break;
  }
  $n++;
}

//-10-)Sorteie números aleatórios de 0 a 100, vá somando os números sorteados e imprimindo cada soma na tela. Só pare quando passar de 1.000;

$n=0;
$dici=[];
while($n<=1e20){
  $numero=rand(1,100);
  $dici[$n]=$numero;
  $soma=array_sum($dici);
  echo("\n$soma");
  if ($soma>=1000){
      break;
  }
  $n++;
    
}

//-11-) Exiba 10 linhas de um texto qualquer usando for;

for($n=1;$n<=10;$n++){
    echo("\n$n =)que belo programa !");
}

//-12-) Exiba uma tabela

$tabela=[
    1=>["a","b","c","d","e","f","g","h","i","g"],
    2=>[1,2,3,4,5,6,7,8,9,10],
    3=>["AA","BB","CC","DD","EE","FF","GG","HH","II","GG"]
    
];
echo(print_r($tabela[1]).print_r($tabela[3]).print_r($tabela[2]));

//-13-) Exiba todos os múltiplos de 3 de 0 a 100;

for($n=1;$n<=100;$n++){
    if ($n%3==0){
        echo("\n$n");
    }
}

//-14-) Exiba a soma de todos os múltiplos de 7 de 0 a 1000;

$valor=0;
$soma=[];
$n=0;
for($n=1;$n<=1000;$n++){
    if ($valor%7==0){
        $soma[$n]=$valor;
    }
    $valor++;
}
echo(array_sum($soma));

//-15-) Exiba em ordem decrescente todos os números de 500 até 10;

for($n=500;$n>=10;--$n){
    echo("\n$n");
}

