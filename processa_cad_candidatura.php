<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


<?php

$assunto = "Candidatura Faxinação";

/* Valores recebidos do formulário  */
$arquivo = $_FILES['arquivo'];
$txt_nome_usuario = $_POST['txt_nome_usuario'];
$txt_email_usuario = $_POST['txt_email_usuario'];
$data_n = $_POST['data_n'];
$data_d = $_POST['data_d']; // Email que será respondido
$telefone = $_POST['telefone'];
$antecedente = $_POST['antecedente'];
$comentarios = $_POST['comentarios'];
 
/* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
$to = "falecom@faxinacao.com";
$remetente = "falecom@faxinacao.com"; // Deve ser um email válido do domínio
 
/* Cabeçalho da mensagem  */
$boundary = "XYZ-" . date("dmYis") . "-ZYX";
$headers = "MIME-Version: 1.0\n";
$headers.= "From: $remetente\n";
$headers.= "Reply-To: $txt_email_usuario\n";
$headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
$headers.= "$boundary\n"; 
 
/* Layout da mensagem  */
$corpo_mensagem = " 
<br>Formulário via site
<br>--------------------------------------------<br>
<br><strong>Nome:</strong> $txt_nome_usuario 
<br><strong>Email:</strong> $txt_email_usuario
<br><strong>Data Disposição :</strong> $data_d
<br><strong>Data Nascimento:</strong> $data_n 
<br><strong>Telefone:</strong> $telefone
<br><strong>Antecedentes:</strong> $antecedente 
<br><strong>Comentarios:</strong> $comentarios



<br><br>--------------------------------------------
";
 
/* Função que codifica o anexo para poder ser enviado na mensagem  */
if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
 
    $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb"); // Abri o arquivo enviado.
 $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"])); // Le o arquivo aberto na linha anterior
 $anexo = base64_encode($anexo); // Codifica os dados com MIME para o e-mail 
 fclose($fp); // Fecha o arquivo aberto anteriormente
    $anexo = chunk_split($anexo); // Divide a variável do arquivo em pequenos pedaços para poder enviar
    $mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
    $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
    $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
    $mensagem.= "$corpo_mensagem\n"; 
    $mensagem.= "--$boundary\n"; 
    $mensagem.= "Content-Type: ".$arquivo["type"]."\n";  
    $mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";  
    $mensagem.= "Content-Transfer-Encoding: base64\n\n";  
    $mensagem.= "$anexo\n";  
    $mensagem.= "--$boundary--\r\n"; 
}
 else // Caso não tenha anexo
 {
 $mensagem = "--$boundary\n"; 
 $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
 $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
 $mensagem.= "$corpo_mensagem\n";
}
 
/* Função que envia a mensagem  */
if(mail($to, $assunto, $mensagem, $headers))
{

//telegram

$chat_id="753343300"; 

$token="1020168766:AAEjRdPwTeq8cxQOgSYN25qS84Bp0rmCxPE";
$mensagem= "Candidatura :".$txt_nome_usuario.urlencode("\n")."Email :".$txt_email_usuario.urlencode("\n")."telefone :".$telefone.urlencode("\n")."";

$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem;

$execucao = file_get_contents($url);

//telegram



 echo "<br><br><center><b><font color='green'>Mensagem enviada com sucesso!";
 echo    "<br>";
 echo"<br> <a href='index.html'><button id='button' type='next' name='next'  class='btn btn-danger'>voltar </button></a>";


} 
 else
 {
 echo "<br><br><center><b><font color='red'>Ocorreu um erro ao enviar a mensagem!";
}

?>