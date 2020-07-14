<?php

$para = "zuarte@gmail.com";
$remetente = "zuarte@gmail.com"; // Deve ser um email válido do domínio

/* Valores recebidos do formulário  */
 $arquivo = $_FILES['arquivo'];
 $nome = $_POST['nome'];
 $replyto = $_POST['replyto']; // Email que será respondido
 $mensagem_form = $_POST['mensagem'];
 $assunto = $_POST['assunto'];




 $boundary = "XYZ-" . date("dmYis") . "-ZYX";
 $headers = "MIME-Version: 1.0\n";
 $headers.= "From: $remetente\n";
 $headers.= "Reply-To: $replyto\n";
 $headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
 $headers.= "$boundary\n"; 
  

 $corpo_mensagem .="<strong> Nome </strong> $nome";
 $corpo_mensagem .="<br><strong> Email</strong> $replyto";
 $corpo_mensagem .="<br><strong> Endereço</strong> $endereco";
 $corpo_mensagem .="<br><strong> WhasApp</strong> $mensagem_form";
 $corpo_mensagem .="<br><strong> instagram</strong> $assunto";
 
 




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
 









$header="Content-Type: text/html; charset= utf-8\n";
$header.="From: $email Reply-to: $email\n";

mail($para,$assunto,$corpo_mensagem,$header);
header("location:index.html");

?>