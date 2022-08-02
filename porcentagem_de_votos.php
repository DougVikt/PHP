<?php
/*========================================= porcentagem de votos de acordo com os eleitores =======================================================*/
$eleitores=32900;
$votos_brancos=6876;
$votos_validos=18323;
$votos_nulos=7701;
$por_brancos=($votos_brancos/$eleitores)*100;
$por_validos=($votos_validos/$eleitores)*100;
$por_nulos=($votos_nulos/$eleitores)*100;
echo "total de eleitores $eleitores ;\nvotos em branco :$votos_brancos ;\nvotos validos :$votos_validos ;\nvotos nulos :$votos_nulos ;\n";
echo ceil($por_brancos)." % votos brancos\n".ceil($por_validos)." % votos validos\n".ceil($por_nulos)." % votos nulos";
