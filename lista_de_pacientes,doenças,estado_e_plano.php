<?php
/*============================================ lista de pacientes, doenças , estado e plano ================================================================*/
$nomes=["joão     ","pedro    ","fernando ","felipe   ","paulo    ","jose     ","matheus  ","alan     ","vitor    ","ana      ","davi     ","maria    ","leticia  ","hugo     ","guilerme ","miguel   ","samuel   ","helena   ","alice    ","laura    "];
$doencas=["Anemia   ","trombose ","asma     ","dengue   ","cirrose  ","colera   ","gripe    ","diabetes ","ebola    ","anemia   ","escorbuto","Derrame  ","gastrite ","linfoma  ","lupus    ","malaria  ","pneumonia","renite   ","sarampo  ","sifilis  "];
$doencas_mortais=["dengue   ","cirrose  ","colera   ","ebola    ","escorbuto","linfoma  ","lupus    ","malaria  ","pneumonia","sifilis  ","caxumba  ","variola  ","Toxoplasmose","Salmonella"," Cardiopatia","Derrame  ","aids     ","Amiloidose","Cálculos Renais"];

echo "---------------++++ CLINICA DEUS NOS AJUDE ++++---------------
\n================ LISTA DE PACIENTES =======================
\n==== NOMES ==== DOENÇAS ==== AVALIAÇÃO ======= PLANOS ===== ";
for ($i=0;$i<20;$i++){
    if (in_array($doencas[$i],$doencas_mortais)){
        $avaliacao=" TERMINAL      ";
    }else{
        $avaliacao=" EM TRATAMENTO ";
    }
    if ($avaliacao==" TERMINAL      "){
            $plano=" plano Portas Para o Céu";
    }else{
            $plano=" plano Vai na Fé";
        }
    echo ("\n     ".$nomes[$i]."= ".$doencas[$i]." = ".$avaliacao." = ".$plano);   
}echo ("\n\nAGRADECEMOS SUA COLABORAÇÃO !
CASO NÃO TENHA NEM UM DOS NOSSOS PLANOS CONVENIADOS , SO ENTRAR EM CONTATO COM :
FUNERARIA O BURACO DO FUTURO 
Não tenha pressa de viver so de morrer !");
