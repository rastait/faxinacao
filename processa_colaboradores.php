<?php

include_once ("conexao.php");


$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$telefone=$_REQUEST['telefone'];
$cep=$_REQUEST['cep'];
$cidade=$_REQUEST['cidade'];
$bairro=$_REQUEST['bairro'];
$endereco=$_REQUEST['endereco'];
$obs=$_REQUEST['obs'];




$result_colaborador = "INSERT INTO colaboradores (nome, email, telefone, cep, cidade,bairro,endereco,obs, created) VALUES ('$nome','$email','$telefone','$cep','$cidade','$bairro','$endereco','$obs', NOW())";
$resultado_colaborador = mysqli_query($conn,$result_colaborador);


if(mysqli_affected_rows($conn) != 0){
    echo '
    <script>
        alert("Cadastro feito com sucesso");
        window.location.href = "listar_colaboradores.php";
    </script>
';


}else{
   '
    <script>
    alert("Cadastro não foi feito");
    window.location.href = "listar_colaboradores.php";
</script>
';
}


?>