<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM colaboradores WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
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
  <style type="text/css">

#input{
  color: black;
}
</style>
	</head>
	<body>
	<div class="container">

		<a href="casdastro_agendamentos.html">Cadastrar</a><br>
		<a href="listar_agendamentos.php">Listar</a><br>
		<h1>Editar Agendamentos</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="agendamentos.php">
			

	<!-- Campo: Nome -->
	<label for="servico">Nome </label>

    <div class="form-group ">
      <div class="input-group input-group-alternative" >
        <div class="input-group-prepend " >
          <span class="input-group-text " ><i class="ni ni-user"></i></span>
		</div>
		<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

        <input class="form-control" id="input"  class="text-dark" type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>">
      </div>
    </div>
        <!-- Campo: Nome -->

		<label for="servico">Email </label>

   <!-- Campo: email -->
  <div class="form-group">
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
      </div>
      <input class="form-control" id="input"  placeholder="Seu Email" type="email" name="email" value="<?php echo $row_usuario['email']; ?>">
    </div>
  </div> 
    <!-- Campo: email -->

  <!-- Campo: Telefone -->
  <label for="servico">Cidade </label>

  <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control"  id="input"   type="text" name="telefone" value="<?php echo $row_usuario['telefone']; ?>" >
                  </div>
                </div>
    <!-- Campo: Telefone -->

   <!-- Campo: CEP -->
   <label for="servico">Cep </label>

  <div class="form-group ">
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-user"></i></span>
      </div>
      <input class="form-control"type="text" id="input"  name="cep" value="<?php echo $row_usuario['cep']; ?>">
    </div>
  </div>  
     <!-- Campo: CEP -->

           <!-- Campo: Cidade -->
		   <label for="servico">Limpeza Pesada </label>

      <div class="form-group ">
        <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-user"></i></span>
          </div>
          <input class="form-control"  id="input"  type="text" name="limpezaPesada" value="<?php echo $row_usuario['limpezaPesada']; ?>">
        </div>
      </div>  
       <!-- Campo: Cidade -->
    
              <!-- Campo: Bairro -->
			  <label for="servico">Serviço </label>

      <div class="form-group">
        <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-user"></i></span>
          </div>
          <input class="form-control" id="input"   type="text" name="servico" value="<?php echo $row_usuario['servico']; ?>">
        </div>
      </div>  
       <!-- Campo: Endereço -->

                  <!-- Campo: Bairro -->
				  <label for="servico">Endereço </label>

      <div class="form-group ">
        <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-user"></i></span>
          </div>
          <input class="form-control" placeholder="Endereço" id="input"  type="text" name="endereco" value="<?php echo $row_usuario['endereco']; ?>">
        </div>
      </div>  
       <!-- Campo: Endereço -->



                  <!-- Campo: Bairro -->
                  <label for="servico">Complemento</label>

<div class="form-group ">
  <div class="input-group input-group-alternative">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="ni ni-user"></i></span>
    </div>
    <input class="form-control" placeholder="Endereço" id="input"  type="text" name="complemento" value="<?php echo $row_usuario['complemento']; ?>">
  </div>
</div>  
 <!-- Campo: Endereço -->


                  <!-- Campo: Bairro -->
                  <label for="servico">Lar </label>

<div class="form-group ">
  <div class="input-group input-group-alternative">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="ni ni-user"></i></span>
    </div>
    <input class="form-control" placeholder="Endereço" id="input"  type="text" name="lar" value="<?php echo $row_usuario['lar']; ?>">
  </div>
</div>  
 <!-- Campo: Endereço -->


                  <!-- Campo: Bairro -->
                  <label for="servico">Horaio </label>

<div class="form-group ">
  <div class="input-group input-group-alternative">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="ni ni-user"></i></span>
    </div>
    <input class="form-control" placeholder="Endereço" id="input"  type="text" name="lar" value="<?php echo $row_usuario['horario']; ?>">
  </div>
</div>  
 <!-- Campo: Endereço -->


    
  <!-- Campo: Obervação -->
  <label for="servico">Observação ?</label>

  <div class="form-group ">
    <textarea class="form-control form-control-alternative" name="obs" id="input"  rows="4" cols="80" value="<?php echo $row_usuario['obs']; ?>"></textarea>
  </div>
			
  <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success">Editar</button>
  </div>
  </div>		</form>
	</div>
	<br>
	<br>
	<br>

	</body>
</html>