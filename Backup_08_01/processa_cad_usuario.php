<?php

include_once ("conexao.php");

$nome_usuario = $_POST['txt_nome_usuario'];
$txt_email_usuario = $_POST['txt_email_usuario'];
$data_n = $_POST['data_n'];
$data_d = $_POST['data_d'];
$telefone = $_POST['telefone'];
$antecedente = $_POST['antecedente'];
$comentarios = $_POST['comentarios'];




//echo "$nome_usuario - $txt_email_usuario";
$result_usuario = "INSERT INTO candidatura (nome, email, data_n, data_d, telefone,antecedente,comentarios) VALUES ('$nome_usuario','$txt_email_usuario','$data_n','$data_d','$telefone','$antecedente','$comentarios')";
$resultado_usuario = mysqli_query($conn,$result_usuario);


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