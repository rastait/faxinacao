<?php
    session_start(); 

$servico = $_GET["servico"];
$limpezaPesada = isset ($_GET["limpezaPesada"])?$_GET["limpezaPesada"]:"[não informado]";
$lar =  isset ($_GET["lar"])?$_GET["lar"]:"[não informado]";        
$banheiros = isset ($_GET["banheiros"])?$_GET["banheiros"]:"[não informado]";  
$quartos = isset ($_GET["quartos"])?$_GET["quartos"]:"[não informado]";  
$email = isset ($_GET["email"])?$_GET["email"]:"[não informado]";  
$telefone = isset ($_GET["telefone"])?$_GET["telefone"]:"[não informado]";  
$data =   isset ($_GET["data"])?$_GET["data"]:"[não informado]"; 
$cep = isset ($_GET["cep"])?$_GET["cep"]:"[não informado]";  
$qtd_horas = isset ($_GET["qtd_horas"])?$_GET["qtd_horas"]:"[não informado]";  
$horario = isset ($_GET["horario"])?$_GET["horario"]:"[não informado]";  
$nome =  isset ($_GET["nome"])?$_GET["nome"]:"[não informado]";  
$complemento =  isset ($_GET["complemento"])?$_GET["complemento"]:"[não informado]";  
$obs = isset ($_GET["obs"])?$_GET["obs"]:"[não informado]";  

$_SESSION['servico'] = $servico;
$_SESSION['limpezaPesada'] = $limpezaPesada;
$_SESSION['lar'] = $lar;
$_SESSION['banheiros'] = $banheiros;
$_SESSION['email'] = $email;
$_SESSION['telefone'] = $telefone;
$_SESSION['data'] = $data;
$_SESSION['cep'] = $cep;
$_SESSION['qtd_horas'] = $qtd_horas;
$_SESSION['nome'] = $nome;
$_SESSION['complemento'] = $complemento;
$_SESSION['obs'] = $obs;
$_SESSION['quartos'] = $quartos;
$_SESSION['horario'] = $horario;


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Pop Serviços</title>
        <!-- Favicon -->
        <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="assets/css/argon.css?v=1.1.0" rel="stylesheet">
        <link type="text/css" href="assets/css/style.css" rel="stylesheet">



        <script src="acao.js"></script>
      
        <link>

      
        
      </head>
</head>

<body>
  
<!--menu-->

<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom" style="background-color:  #0E5AA7;">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="./index.html">   
          <img alt="image" src="material/branco.png" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img alt="image" src="assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6  collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            
          <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span  role="tab">Contratar</span>
              </a>
              <div class="dropdown-menu">
                <a href="casa.html" class="dropdown-item">Minha Casa</a>
                <a href="empresa.html" class="dropdown-item">Minha Empresa</a>
              </div>
            </li>
            <li>       

            <a href="trabalhe.html" class="nav-link" role="button">
                <span >Trabalhe com a Pop</span>
              </a> 
            
            </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/POPLIMPEZA/" target="_blank" data-toggle="tooltip" title="Pop no Face">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Pop no Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
           
            <li class="nav-item">
              
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="cadastro.html"  class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class=" mr-2"></i>
                </span>
                <span class="nav-link-inner--text">Cadastrar</span>
                
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<!--menu-->


<?php


if ($servico == "Limpeza Pesada") {
      
   if  (empty($limpezaPesada.$lar.$quartos.$banheiros)) {
  
    echo "algum campo esta vazio";

   }else{

    echo  '<div class="container">';
    echo    '<div class="py-5 text-center">';
    echo    '<br>';


    echo   '<img class="d-block mx-auto mb-4" src="/assets/img/brand/logo.png" alt="" width="72" height="72">';
    echo '<h2>Orçamento</h2> ';
    echo '</div>';
    echo '<ul class="list-group mb-3">';
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Serviço</h6> ';
    echo '<h6 class="text-muted">'.$servico.'</h6>';
    echo '</div>';
    echo '<span class="text-muted"> </span>';
    echo '</li>';
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Tipo de limpeza Pesada</h6>' ;
    echo '<h6 class="text-muted">'.$limpezaPesada.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Local</h6>' ;
    echo '<h6 class="text-muted">'.$lar.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Quartos</h6>' ;
    echo '<h6 class="text-muted">'.$quartos.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Banheiros </h6>' ;
    echo '<h6 class="text-muted">'.$banheiros .'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Email </h6>' ;
    echo '<h6 class="text-muted">'.$email .'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Telefone </h6>' ;
    echo '<h6 class="text-muted">'.$telefone.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Data </h6>' ;
    echo '<h6 class="text-muted">'.$data.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Quantidade de horas </h6>' ;
    echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Horário</h6>' ;
    echo '<h6 class="text-muted">'.$horario.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Nome</h6>' ;
    echo '<h6 class="text-muted">'.$nome.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Complemento</h6>' ;
    echo '<h6 class="text-muted">'.$complemento.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';

     
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Complemento</h6>' ;
    echo '<h6 class="text-muted">'.$cep.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';


    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Observação</h6>' ;
    echo '<h6 class="text-muted">'.$obs.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    

//calculos


 if ($limpezaPesada == "Pós Obra") {

    if ($quartos == 1 ||$quartos < 1){

        $preco = 135;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    

    }elseif ($quartos == "2"){
        $preco = 180;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }elseif($quartos == "3"){
        $preco = 225;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
    elseif($quartos == "4"){
        $preco = 270;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
    elseif ($quartos == "5"){
        $preco = 315;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }   elseif($quartos == "6"){
        $preco = 360;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($quartos == "7"){
        $preco = 405;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif ($quartos == "8"){
        $preco = 450;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif ($quartos == "9"){
        $preco = 495;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($quartos == "10"){
        $preco = 540;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    
}

    

    
    else{
        echo "Preço :Acima de 24 Horas <br>";

    }

//calculos


   } elseif   ($limpezaPesada == "Pré Mudança") {
    if ($quartos == 1 ||$quartos < 1){

        $preco = 60;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    }elseif ($quartos == "2"){
        $preco = 90;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif($quartos == "3"){
        $preco = 120;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif($quartos == "4"){
        $preco = 150;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($quartos == "5"){
        $preco = 180;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    }   elseif($quartos == "6"){
        $preco = 210;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($quartos == "7"){
        $preco = 240;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    }elseif ($quartos == "8"){
        $preco = 270;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } elseif ($quartos == "9"){
        $preco = 300;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } 
    elseif ($quartos == "10"){
        $preco = 330;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    }  elseif ($quartos == "11"){
        $preco = 360;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }  elseif ($quartos == "12"){
        $preco = 390;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } 
    elseif ($quartos == "13"){
        $preco = 420;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($quartos == "14"){
        $preco = 450;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } 
    elseif ($quartos == "15"){
        $preco = 480;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } 
    elseif ($quartos == "16"){
        $preco = 510;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    } elseif ($quartos == "17"){
        $preco = 540;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($quartos == "18"){
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } 
    elseif ($quartos == "19"){
        $preco = 600;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } 
    elseif ($quartos == "20"){
        $preco = 630;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } 
    elseif ($quartos == "21"){
        $preco = 660;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } 
    elseif ($quartos == "22"){
        $preco = 690;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } 
    elseif ($quartos == "23"){
        $preco = 720;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } 

    elseif ($quartos == "24"){
        $preco = 750;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } 
    
    else{
        echo "Preço :Acima de 24 Horas enviaremos um orçamento Especial <br>";

    }


}



}
    


}else if  ($servico == "Passar Roupa"){




    echo  '<div class="container">';
    echo    '<div class="py-5 text-center">';
    echo   '<img class="d-block mx-auto mb-4" src="/assets/img/brand/logo.png" alt="" width="72" height="72">';
    echo '<h2>Orçamento</h2> ';
    echo '</div>';
    echo '<ul class="list-group mb-3">';
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Serviço</h6> ';
    echo '<h6 class="text-muted">'.$servico.'</h6>';
    echo '</div>';
    echo '<span class="text-muted"> </span>';
    echo '</li>';

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Local</h6>' ;
    echo '<h6 class="text-muted">'.$lar.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Email </h6>' ;
    echo '<h6 class="text-muted">'.$email .'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Telefone </h6>' ;
    echo '<h6 class="text-muted">'.$telefone.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Data </h6>' ;
    echo '<h6 class="text-muted">'.$dat.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Quantidade de horas </h6>' ;
    echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Horário</h6>' ;
    echo '<h6 class="text-muted">'.$horario.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Nome</h6>' ;
    echo '<h6 class="text-muted">'.$nome.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    

   
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Cep</h6>' ;
    echo '<h6 class="text-muted">'.$cep.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';

    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Complemento</h6>' ;
    echo '<h6 class="text-muted">'.$complemento.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Observação</h6>' ;
    echo '<h6 class="text-muted">'.$obs.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    

    //calculos
    if ($qtd_horas == "3" ){
        $preco = 66;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif($qtd_horas == "4"){
        $preco = 88;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif($qtd_horas == "5"){
        $preco = 110;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "6"){
        $preco = 315;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }   elseif($qtd_horas == "7"){
        $preco = 132;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    

    } elseif ($quartos == "8"){
        $preco = 154;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif ($qtd_horas == "9"){
        $preco = 176;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "10"){
        $preco = 198;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "11"){
        $preco = 220;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "12"){
        $preco = 242;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "13"){
        $preco = 264;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "14"){
        $preco = 286;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "15"){
        $preco = 308;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "16"){
        $preco = 330;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "17"){
        $preco = 352;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } elseif ($qtd_horas == "18"){
        $preco = 374;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "19"){
        $preco = 396;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "20"){
        $preco = 428;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } elseif ($qtd_horas == "21"){
        $preco = 440;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    } elseif ($qtd_horas == "22"){
        $preco = 462;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "23"){
        $preco = 484;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    } elseif ($qtd_horas == "24"){
        $preco = 506;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }


    else{
        

        echo "Valor Acima de 24 Horas <br>";


    }

//calculos


}else if ($servico == "Limpeza Padrão"){



    echo  '<div class="container">';
    echo    '<div class="py-5 text-center">';
    echo   '<img class="d-block mx-auto mb-4" src="/assets/img/brand/logo.png" alt="" width="72" height="72">';
    echo '<h2>Orçamento</h2> ';
    echo '</div>';
    echo '<ul class="list-group mb-3">';
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Serviço</h6> ';
    echo '<h6 class="text-muted">'.$servico.'</h6>';
    echo '</div>';
    echo '<span class="text-muted"> </span>';
    echo '</li>';
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Local</h6>' ;
    echo '<h6 class="text-muted">'.$lar.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Quartos</h6>' ;
    echo '<h6 class="text-muted">'.$quartos.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Banheiros </h6>' ;
    echo '<h6 class="text-muted">'.$banheiros .'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Email </h6>' ;
    echo '<h6 class="text-muted">'.$email .'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Telefone </h6>' ;
    echo '<h6 class="text-muted">'.$telefone.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Data </h6>' ;
    echo '<h6 class="text-muted">'.$data.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Quantidade de horas </h6>' ;
    echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Horário</h6>' ;
    echo '<h6 class="text-muted">'.$horario.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Nome</h6>' ;
    echo '<h6 class="text-muted">'.$nome.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Complemento</h6>' ;
    echo '<h6 class="text-muted">'.$complemento.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Complemento</h6>' ;
    echo '<h6 class="text-muted">'.$cep.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';


    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Observação</h6>' ;
    echo '<h6 class="text-muted">'.$obs.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';




    //calculos
    if ($quartos == 1 ||$quartos < 1){
        $preco = 66;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif($quartos == "2"){
        $preco = 88;
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    }
    elseif($quartos == "3"){
        $preco = 88;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
     
    elseif($quartos == "4"){
        $preco = 88;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
    elseif($quartos == "5"){
        $preco = 110;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
    elseif ($quartos == "6"){
        $preco = 315;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }   elseif($quartos == "7"){
        $preco = 132;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($quartos == "8"){
        $preco = 154;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif ($quartos == "9"){
        $preco = 176;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($quartos == "10"){
        $preco = 198;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "11"){
        $preco = 220;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "12"){
        $preco = 242;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "13"){
        $preco = 264;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "14"){
        $preco = 286;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    } elseif ($qtd_horas == "15"){
        $preco = 308;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "16"){
        $preco = 330;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "17"){
        $preco = 352;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "18"){
        $preco = 374;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "19"){
        $preco = 396;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "20"){
        $preco = 428;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "21"){
        $preco = 440;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "22"){
        $preco = 462;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "23"){
        $preco = 484;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "24"){
        $preco = 506;
 
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçmento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }


} else {

    echo "<br>Campo nome obrigatorio";
    $_SESSION['servico'] = "Campo Serviço obrigatorio";
    header("Location: casa.html");
}



?>
       <!--tabela-->
       </div>

<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left ">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
        
  <br>
          <img alt="image" src="./assets/img/brand/Imagem 1.png">
     
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto ">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"  style="color:  #0E5AA7">Serviços</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="casa.html">Minha Casa</a>
            </li>
            <li>
              <a href="empresa.html">Minha Empresa</a>
            </li>
      
            <li>
              <a href="trabalhe.html">Trabalhe com a Pop</a>
            </li>

          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"  style="color:  #0E5AA7">Cadastro</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="cadastro.html">Cadastrar</a>
            </li>
         
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"  style="color:  #0E5AA7">Contato</h5>
  
          <ul class="list-unstyled">
            <li>
                <i class="fa fa-envelope" style="color:  #0E5AA7" ></i>

              <a href="#!">falepop@poplimpeza.com.br</a>
            </li>
            <li>
              <i class="fa fa-whatsapp"  style="color:  #0E5AA7"></i>
              <a href="#!">(11) 99708-0758</a>
            </li>
            <li>
                <i class="fa fa-whatsapp"  style="color:  #0E5AA7" ></i>
              
                <a href="#!">(11) 98273-5585s</a>

            </li>
            <li>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="www.poplimpeza.com.br"  style="color:  #0E5AA7" >Pop Serviços</a>
    </div>
    <!-- Copyright -->
  
  </footer>



<!-- Core -->
<script src="jquery.min.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="assets/vendor/headroom/headroom.min.js"></script>
<!-- Optional JS -->
<script src="assets/vendor/onscreen/onscreen.min.js"></script>
<script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Argon JS -->
<script src="assets/js/argon.js?v=1.1.0"></script>  
<a href="https://api.whatsapp.com/send?phone=551198273-5585&text=Ola" Style=" position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;" target="_blank"> <i style="margin-top:16px" class="fa fa-whatsapp"></i> </a>

</body>

</html>
