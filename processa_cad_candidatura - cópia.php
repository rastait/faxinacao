<?php

include_once ("conexao.php");



$para = "zuarte@gmail.com";

$assunto = "Candidatura de emprego";
$txt_nome_usuario=$_REQUEST['txt_nome_usuario'];
$txt_email_usuario=$_REQUEST['txt_email_usuario'];
$data_n=$_REQUEST['data_n'];
$data_d=$_REQUEST['data_d'];
$telefone=$_REQUEST['telefone'];
$antecedente=$_REQUEST['antecedente'];
$comentarios=$_REQUEST['comentarios'];

$curriculo = $_REQUEST['curriculo'];

$corpo .="<strong> Nome </strong> $txt_nome_usuario";
$corpo .="<br><strong> Email</strong> $txt_email_usuario";
$corpo .="<br><strong> Data de Nascimento</strong> $data_n";
$corpo .="<br><strong> Data de Inicio</strong> $data_d";
$corpo .="<br><strong> Telefone</strong> $telefone";
$corpo .="<br><strong> Antecedentes</strong> $antecedente";
$corpo .="<br><strong> Comentarios:</strong> $comentarios";
$corpo .="<br><strong> Link do curriculo :</strong> $curriculo";



$header="Content-Type: text/html; charset= utf-8\n";
$header.="From: $email Reply-to: $email\n";

mail($para,$assunto,$corpo,$header);

//echo "$nome_usuario - $txt_email_usuario";
$result_usuario = "INSERT INTO candidatura (nome, txt_email_usuario, data_n, data_d, telefone,antecedente,comentarios) VALUES ('$nome_usuario','$txt_email_usuario','$data_n','$data_d','$telefone','$antecedente','$comentarios')";
$resultado_usuario = mysqli_query($conn,$result_usuario);
//


 // telegram

 $chat_id="753343300"; 


$token="1020168766:AAEjRdPwTeq8cxQOgSYN25qS84Bp0rmCxPE";

$mensagem= "Ola  : ".$txt_nome_usuario." acabou de enviar candidatura de emprego";

$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem;

$execucao = file_get_contents($url);

//

if(mysqli_affected_rows($conn) != 0){
    echo '
    <script>
        alert("Cadastro feito com sucesso");
        window.location.href = "index.html";
    </script>
';


}else{
   '
    <script>
    alert("Cadastro não foi feito");
    window.location.href = "index.html";
</script>
';
}


?>