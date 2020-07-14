<?php



$arquivo = $_FILES['arquivo'];
$nome = $_REQUEST["nome"];
$antecedente = $_REQUEST["antecedente"];
$email = $_REQUEST["email"];
$telefone =  $_REQUEST["telefone"]    ;
$data_n = $_REQUEST["data_n"] ;
$data_d = $_REQUEST["data_d"] ;
$comentarios = $_REQUEST["comentarios"] ;

$assunto = "Contato pelo site";


/* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
$to = "zuarte@gmail.com";
$remetente = "zuarte@gmail.com"; // Deve ser um email válido do domínio
 
/* Cabeçalho da mensagem  */
$boundary = "XYZ-" . date("dmYis") . "-ZYX";
$headers = "MIME-Version: 1.0\n";
$headers.= "From: $remetente\n";
$headers.= "Reply-To: $replyto\n";
$headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
$headers.= "$boundary\n"; 
 
/* Layout da mensagem  */
$corpo_mensagem = " 
<br>Formulário via site
<br>--------------------------------------------<br>
<br><strong>Nome:</strong> $nome
<br><strong>Email:</strong> $email
<br><strong>Atestado:</strong> $atestado
<br><strong>telefone:</strong> $telefone
<br><strong>data_nascimento:</strong> $data_nascimento
<br><strong>data_disposicao:</strong> $data_disposicao
<br><strong>comentarios:</strong> $comentarios
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


//    echo '
//  <script>
//     alert("Mensagem enviada com sucesso!");
  //      window.location.href = "index.html";
   // </script>
//';
    echo $email ;




} 
 else
 {
    echo '
    <script>
        alert("Mensagem não foi enviada");
        window.location.href = "index.html";
    </script>
';


 }




?>