<?php
session_start();

include_once("conexao.php");

 $servico =  $_SESSION['servico'];
 $limpezaPesada = $_SESSION['limpezaPesada'];
 $lar = $_SESSION['lar'] ;
 $banheiros = $_SESSION['banheiros'];
 $email = $_SESSION['email'];
 $telefone = $_SESSION['telefone'] ;
 $data = $_SESSION['data'] ;
 $cep = $_SESSION['cep'] ;
 $qtd_horas = $_SESSION['qtd_horas'] ;
 $nome = $_SESSION['nome'] ;
 $complemento = $_SESSION['complemento'] ;
 $obs = $_SESSION['obs'] ;
 $quartos  = $_SESSION['quartos'] ;
 $horario  = $_SESSION['horario'] ;
 $preco  = $_SESSION['preco'] ;

if ($servico == "Limpeza Pesada") {

    $result_agendamentos = "INSERT INTO agendamentos (servico,nome,limpezaPesada,quartos,dataa,obs,complemento,cep,lar,banheiros,qtd_horas,horario,email,telefone,preco,  created) VALUES ('$servico','$nome','$limpezaPesada','$quartos','$data','$obs','$complemento','$cep','$lar','$banheiros','$qtd_horas','$horario','$email','$telefone','$preco', NOW())";
    $resultado_agendamentos = mysqli_query($conn,$result_agendamentos);

    $para = "falecom@faxinacao.com.com.br";

//telegram

$chat_id="753343300"; 

$token="1020168766:AAEjRdPwTeq8cxQOgSYN25qS84Bp0rmCxPE";
$mensagem= "Ola o cliente :".$nome.urlencode("\n")."Acabou de enviar :".$servico.urlencode("\n")."Ttipo :".$limpezaPesada.urlencode("\n")."Quartos :".$quartos.urlencode("\n")."Data :".$data.urlencode("\n")."Endereçoo :".$complemento.urlencode("\n")."Cep :".$cep.urlencode("\n")."Lar:".$lar.urlencode("\n")."Banheiros :".$banheiros.urlencode("\n")."Horario :".$horario.urlencode("\n")."Telefone :".$telefone.urlencode("\n")."preço :".$preco.urlencode("\n")."Obs :".$obs."";

$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem;

$execucao = file_get_contents($url);

//telegram




//email usuário
$assunto2 = "Agendamento Pop Serviços";
$para2 = $email;
$corpo2 = "<br><strong> Agendamento feito com sucesso! <br>Nosso trabalho ganha um significado muito maior quando é reconhecido por clientes como você e, por isso, nós agradecemos muito!</strong><br><strong>Atenciosamente,</strong><br><strong> Pop Serviços </strong>";

//email usuário


    $assunto = "Agendamento Pop";
    

    
    $corpo .="<strong> Serviço </strong> $servico";
    $corpo .="<br><strong> LimpezaPesada</strong> $limpezaPesada";
    $corpo .="<br><strong> Lar</strong> $lar";
    $corpo .="<br><strong> Banheiros</strong> $banheiros";
    $corpo .="<br><strong> Email</strong> $email";
    $corpo .="<br><strong> Nome</strong> $nome";
    $corpo .="<br><strong> Telefone</strong> $telefone";
    $corpo .="<br><strong> Cep</strong> $cep";
    $corpo .="<br><strong> Observação</strong> $obs";
    $corpo .="<br><strong> Quartos</strong> $quartos";
    $corpo .="<br><strong> Horario</strong> $horario";
    $corpo .="<br><strong> Endereço</strong> $complemento";
    $corpo .="<br><strong> Preço</strong> $preco";

    
//email usuário

$header2="Content-Type: text/html; charset= utf-8\n";
$header2.="From: $email Reply-to: $email\n";
//email usuário


    
    $header="Content-Type: text/html; charset= utf-8\n";
    $header.="From: $email Reply-to: $email\n";
    
    mail($para,$assunto,$corpo,$header);
    mail($para2,$assunto2,$corpo2,$header2);





    echo '
    <script>
        alert("Agendamento feito com sucesso!");
        window.location.href = "index.html";
    </script>
';

} elseif($servico == "Limpeza Padrão") {

//telegram

$chat_id="753343300"; 

$token="1020168766:AAEjRdPwTeq8cxQOgSYN25qS84Bp0rmCxPE";

$mensagem= "Ola o cliente :".$nome.urlencode("\n")."Acabou de enviar :".$servico.urlencode("\n")."Quartos :".$quartos.urlencode("\n")."Data :".$data.urlencode("\n")."Endereçoo :".$complemento.urlencode("\n")."Cep :".$cep.urlencode("\n")."Lar:".$lar.urlencode("\n")."Banheiros :".$banheiros.urlencode("\n")."Horario :".$horario.urlencode("\n")."Telefone :".$telefone.urlencode("\n")."preço :".$preco.urlencode("\n")."Obs :".$obs."";

$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem;

$execucao = file_get_contents($url);

//telegram



   
    $result_agendamentos = "INSERT INTO agendamentos (servico,nome,limpezaPesada,quartos,dataa,obs,complemento,cep,lar,banheiros,qtd_horas,horario,email,telefone,preco,  created) VALUES ('$servico','$nome','$limpezaPesada','$quartos','$data','$obs','$complemento','$cep','$lar','$banheiros','$qtd_horas','$horario','$email','$telefone','$preco', NOW())";
    $resultado_agendamentos = mysqli_query($conn,$result_agendamentos);


    $para = "falecom@faxinacao.com.com";

    $assunto = "Agendamento Pop";
    


//email usuário
$assunto2 = "Agendamento Pop Serviços";
$para2 = $email;
$corpo2 = "<br><strong> Agendamento feito com sucesso! <br>Nosso trabalho ganha um significado muito maior quando é reconhecido por clientes como você e, por isso, nós agradecemos muito!</strong><br><strong>Atenciosamente,</strong><br><strong> Pop Serviços </strong>";

//email usuário

    
    $corpo .="<strong> Serviço </strong> $servico";
    $corpo .="<br><strong> Lar</strong> $lar";
    $corpo .="<br><strong> Banheiros</strong> $banheiros";
    $corpo .="<br><strong> Email</strong> $email";
    $corpo .="<br><strong> Nome</strong> $nome";
    $corpo .="<br><strong> Telefone</strong> $telefone";
    $corpo .="<br><strong> Cep</strong> $cep";
    $corpo .="<br><strong> Observação</strong> $obs";
    $corpo .="<br><strong> Quartos</strong> $quartos";
    $corpo .="<br><strong> Horario</strong> $horario";
    $corpo .="<br><strong> Endereço</strong> $complemento";
    $corpo .="<br><strong> Preço</strong> $preco";

    
    
    
//email usuário

$header2="Content-Type: text/html; charset= utf-8\n";
$header2.="From: $email Reply-to: $email\n";
//email usuário


    
    $header="Content-Type: text/html; charset= utf-8\n";
    $header.="From: $email Reply-to: $email\n";
    
    mail($para,$assunto,$corpo,$header);
    mail($para2,$assunto2,$corpo2,$header2);





    echo '
    <script>
        alert("Agendamento feito com sucesso!");
        window.location.href = "index.html";
    </script>
';
   
}elseif($servico == "Passar Roupa"){


    //telegram

    $chat_id="753343300"; 

    $token="1020168766:AAEjRdPwTeq8cxQOgSYN25qS84Bp0rmCxPE";

$mensagem= "Ola o cliente :".$nome.urlencode("\n")."Acabou de enviar :".$servico.urlencode("\n")."Quartos :".$quartos.urlencode("\n")."Data :".$data.urlencode("\n")."Endereçoo :".$complemento.urlencode("\n")."Cep :".$cep.urlencode("\n")."Lar:".$lar.urlencode("\n")."Horario :".$horario.urlencode("\n")."Telefone :".$telefone.urlencode("\n")."preço :".$preco.urlencode("\n")."Obs :".$obs."";

$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem;

$execucao = file_get_contents($url);

//telegram

   
    $result_agendamentos = "INSERT INTO agendamentos (servico,nome,limpezaPesada,quartos,dataa,obs,complemento,cep,lar,banheiros,qtd_horas,horario,email,telefone,preco,  created) VALUES ('$servico','$nome','$limpezaPesada','$quartos','$data','$obs','$complemento','$cep','$lar','$banheiros','$qtd_horas','$horario','$email','$telefone','$preco', NOW())";
    $resultado_agendamentos = mysqli_query($conn,$result_agendamentos);



    $para = "falecom@faxinacao.com.com";

    $assunto = "Agendamento Pop";
    
    

//email usuário
$assunto2 = "Agendamento Pop Serviços";
$para2 = $email;
$corpo2 = "<br><strong> Agendamento feito com sucesso! <br>Nosso trabalho ganha um significado muito maior quando é reconhecido por clientes como você e, por isso, nós agradecemos muito!</strong><br><strong>Atenciosamente,</strong><br><strong> Pop Serviços </strong>";

//email usuário


    $corpo .="<strong> Serviço </strong> $servico";
    $corpo .="<br><strong> Lar</strong> $lar";
    $corpo .="<br><strong> Email</strong> $email";
    $corpo .="<br><strong> Nome</strong> $nome";
    $corpo .="<br><strong> Telefone</strong> $telefone";
    $corpo .="<br><strong> Cep</strong> $cep";
    $corpo .="<br><strong> Observação</strong> $obs";
    $corpo .="<br><strong> Horario</strong> $horario";
    $corpo .="<br><strong> Endereço</strong> $complemento";
    $corpo .="<br><strong> Preço</strong> $preco";

    
    //email usuário

$header2="Content-Type: text/html; charset= utf-8\n";
$header2.="From: $email Reply-to: $email\n";
//email usuário


    
    $header="Content-Type: text/html; charset= utf-8\n";
    $header.="From: $email Reply-to: $email\n";
    
    mail($para,$assunto,$corpo,$header);
    mail($para2,$assunto2,$corpo2,$header2);





    echo '
    <script>
        alert("Agendamento feito com sucesso!");
        window.location.href = "index.html";
    </script>
';
   
}else{

echo "Nenhuma opção valida";
}


?>

