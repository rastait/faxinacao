<?php

include_once ("conexao.php");


$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$telefone=$_REQUEST['telefone'];

$result_mailing = "INSERT INTO mailing (nome, email, telefone, created) VALUES ('$nome','$email','$telefone', NOW())";
$resultado_mailing = mysqli_query($conn,$result_mailing);

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