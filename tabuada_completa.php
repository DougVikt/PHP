<?php
/*===================================== tabuada completa =====================================*/
$valor=1;
while($valor<=10){
    for($n=0;$n<=10;$n++){
        echo("\n$valor x $n = ".$valor*$n);
    if ($n==10){
        $valor++;
    }
}
}
