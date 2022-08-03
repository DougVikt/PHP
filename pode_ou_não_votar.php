<?php
/*================================================== se pode ou não votar =========================================================================*/
$data=2022;
$ano_de_nascida=1998;
$idade=$data-$ano_de_nascida;
echo "pela sua idade de $idade anos , você ";
if ($idade<16){
    echo "não pode votar";
}
elseif ($idade>=16 and $idade<18 or $idade>65) {
    echo "tem voto facultativo";
}
else {
    echo "tem voto obrigatorio";
}
