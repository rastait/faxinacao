<?php
session_start();

include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
$limpezaPesada = filter_input(INPUT_POST, 'limpezaPesada', FILTER_SANITIZE_STRING);
$lar = filter_input(INPUT_POST, 'lar', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);
$quartos = filter_input(INPUT_POST, 'quartos', FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
$banheiros = filter_input(INPUT_POST, 'banheiros', FILTER_SANITIZE_STRING);





//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE agendamentos SET nome='$nome', email='$email',telefone='$telefone', cep='$cep' ,servico='$servico', limpezaPesada='$limpezaPesada' , lar='$lar', complemento='$complemento', obs='$obs', quartos='$quartos', horaio='$horaio', banheiros='$banheiros' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: listar_agendamentos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edita_agendamentos.php?id=$id");
}
