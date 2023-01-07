
   <?php
        header("url=cadastro1.html",true);
        $host = "127.0.0.1";
        $user = "root";
        $senha = "";
        $name_bd = "cadastro";

        $conectando = mysqli_connect($host, $user, $senha );

        $banco = mysqli_select_db($conectando, $name_bd);

        $nome = $_POST['nome'];
        $sobe = $_POST['sobrenome'];
        $fone = $_POST['fone'];
        $email = $_POST['email'];
        
        $pesquisa = mysqli_query($conectando , "select * from entrada where nome='$nome' and sobrenome='$sobe' and fone='$fone' and email='$email'");
        $data = mysqli_fetch_array($pesquisa, MYSQLI_NUM);
        if($data[0] > 1) {
            header("url=cadastro2.html");
        }
        else{
            mysqli_query($conectando,"insert into entrada (nome , sobrenome , fone , email) values('$nome','$sobe', '$fone','$email')");

        }
        
        
 
       
        
           
        

?> 

