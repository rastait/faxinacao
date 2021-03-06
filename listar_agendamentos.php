<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Pop Serviços - Fonte de Limpeza">
  <meta name="author" content="Creative Tim">
  <title>Faxinação</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet"t7>
  <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.1.0" rel="stylesheet">
  <link type="text/css" href="./assets/css/style.css" rel="stylesheet">


  
</head>
	<body>
		
	<div class="container">
		<br>
	<a href="index_admin.php">Voltar</a><br>

		<h1>Agendamentos</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 10;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM agendamentos LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "<b>Servico:</b> " . $row_usuario['servico'] . "<br>";
			echo "<b>LimpezaPesada:</b> " . $row_usuario['limpezaPesada'] . "<br>";
			echo "<b>banheiros:</b> " . $row_usuario['banheiros'] . "<br>";
			echo "<b>Email:</b> " . $row_usuario['email'] . "<br>";
			echo "<b>telefone:</b> " . $row_usuario['telefone'] . "<br>";
			echo "<b>Nome:</b> " . $row_usuario['nome'] . "<br>";
            echo "<b>Data:</b> " . $row_usuario['dataa'] . "<br>";
			echo "<b>Quantidade horas:</b> " . $row_usuario['qtd_horas'] . "<br>";
			echo "<b>cep:</b> " . $row_usuario['cep'] . "<br>";
			echo "<b>Endereço:</b> " . $row_usuario['complemento'] . "<br>";
			echo "<b>obs:</b> " . $row_usuario['obs'] . "<br>";
			echo "<b>Horario:</b> " . $row_usuario['horario'] . "<br>";
			echo "<b>Criado em :</b> " . $row_usuario['created'] . "<br>";
			echo "<b>Lar:</b> " . $row_usuario['lar'] . "<br>";
			echo "<b>Preço:</b> " . $row_usuario['preco'] . "<br>";

			echo "<a href='proc_apagar_agendamentos.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";



		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM agendamentos";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='listar_agendamentos.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='listar_agendamentos.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='listar_agendamentos.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>
		
		<br>
		<br>
		<br>

		</div>
		
	</body>
</html>