<?php
/*=================================================== boletim ========================================================================================*/
$nome="cloclo";
$notas=[1=>10,2=>8,3=>5,4=>9];
if ($notas[1]<7){
    $nota1="ruim";
}elseif ($notas[1]>=7) {
    $nota1="boa";
}
if ($notas[2]<7){
    $nota2="ruim";
}elseif($notas[2]>=7){
    $nota2="boa";
}
if ($notas[3]<7){
    $nota3="ruim";
}elseif ($notas[3]>=7) {
    $nota3="boa";
}
if ($notas[4]<7){
    $nota4="ruim";
}elseif($notas[4]>=7){
    $nota4="boa";
}
$media=($notas[1]+$notas[2]+$notas[3]+$notas[4])/4;
if ($media<7){
    $avaliacao="reprovado ";
}elseif($media>=7){
    $avaliacao="aprovado";
}
echo("aluno $nome :
      1° bimestre = ".$notas[1]." $nota1
      2° bimestre = ".$notas[2]." $nota2
      3° bimestre = ".$notas[3]." $nota3
      4° bimestre = ".$notas[4]." $nota4
      media do ano => $media $avaliacao ");
