<?php

include_once ("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_n = $_POST['data_n'];
$data_d = $_POST['data_d'];
$antecedente = $_POST['antecedente'];
$comentarios = $_POST['comentarios'];


//echo "$nome_usuario - $txt_email_usuario";
$result_usuario = "INSERT INTO candidatura (nome, email, telefone, data_n, data_d, antecedente, comentarios) VALUES ('$nome','$email','$telefone','$data_n','$data_d','$antecedente','$cometarios' )";
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