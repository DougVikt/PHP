<?php
*================================================= lista de pacientes de acordo com as doenças =====================================================*/      
$nomes=["joão","pedro","fernando","felipe","paulo","jose","matheus","alan","vitor","ana","davi","maria","leticia","hugo","guilerme","miguel","samuel","helena","alice","laura"];
$doencas=["Anemia","trombose","asma","dengue","cirrose","colera","conjuntivite","diabetes","ebola","anemia","escorbuto","febre amarela","gastrite","linfoma","lupus","malaria","pneumonia","renite","sarampo","sifilis"];

echo "==== CLINICA DEUS NOS AJUDE ====
==== LISTA DE PACIENTES ====
==== NOMES ==== DOENÇAS ====";

for($i=0;$i<20;$i++){
  echo ("\n       ".$nomes[$i]." : ".$doencas[$i]);
}
