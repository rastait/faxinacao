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
    echo '<h6 class="my-0">Horário de chegada do profissional</h6>' ;
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
    echo '<h6 class="my-0">Endereço</h6>' ;
    echo '<h6 class="text-muted">'.$complemento.'</h6>';
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
    echo '<h6 class="my-0">Observação</h6>' ;
    echo '<h6 class="text-muted">'.$obs.'</h6>';
    echo '</div>';
    echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
    echo '</li>';
    

//calculos


 if ($limpezaPesada == "Pós Obra") {

    if ($quartos == 1 ||$quartos < 1){

        $preco = 450;
        $_SESSION['preco'] = $preco;

        $qtd_horas =  5;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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
        $preco = 630;
        $_SESSION['preco'] = $preco;
        
        $qtd_horas =  7;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    }elseif($quartos == "3"){
        $preco = 810;
        $_SESSION['preco'] = $preco;


        $qtd_horas =  9;


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif($quartos == "4"){
        $preco = 990;
        $_SESSION['preco'] = $preco;

        $qtd_horas =  11;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

      

    }
    elseif ($quartos == "5"){
        $preco = 1.170;
        $_SESSION['preco'] = $preco;

        $qtd_horas =  13;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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





    }   elseif($quartos == "6"){
        $preco = 1350;
        $_SESSION['preco'] = $preco;


        $qtd_horas =  15;


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$ </h6>' ;
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

    } elseif ($quartos == "7"){
        $preco = 1.530;
        $_SESSION['preco'] = $preco;

        $qtd_horas =  17;


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }elseif ($quartos == "8"){
        $preco = 1710;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  19;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$ </h6>' ;
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

    }elseif ($quartos == "9"){
        $preco = 1.890;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  21;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço  R$</h6>' ;
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

    }
    elseif ($quartos == "10"){
        $preco = 2.070;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  23;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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
    
}
elseif ($quartos == "11"){
    $preco = 2.250;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  25;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "12"){
    $preco = 2.430;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  27;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "13"){
    $preco = 2.610;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  29;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "14"){
    $preco = 2.790;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  31;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "15"){
    $preco = 2.970;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  33;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "16"){
    $preco = 3.150;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  35;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "17"){
    $preco = 3.330;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  37;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "18"){
    $preco = 3.510;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  39;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "19"){
    $preco = 3.690;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  41;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "20"){
    $preco = 3.870;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  43;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "21"){
    $preco = 4.050;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  45;


    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "22"){
    $preco = 4.230;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  47;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "23"){
    $preco = 4.410;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  49;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}
elseif ($quartos == "24"){
    $preco = 4.590;
    $_SESSION['preco'] = $preco;
    $qtd_horas =  51;

    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
    echo '<div>';
    echo '<h6 class="my-0">Preço R$</h6>' ;
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

}

    
    else{
        echo "Preço R$ :Acima de 24 Horas <br>";

    }

//calculos


   } elseif   ($limpezaPesada == "Pré Mudança") {
    if ($quartos == 1 ||$quartos < 1){

        $preco = 175;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  5;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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
        $preco = 210;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  6;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }elseif($quartos == "3"){
        $preco = 245;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  7;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif($quartos == "4"){
        $preco = 280;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  8;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif ($quartos == "5"){
        $preco = 310;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  9;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    }   elseif($quartos == "6"){
        $preco = 350;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  10;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($quartos == "7"){
        $preco = 385;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  11;



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    }elseif ($quartos == "8"){
        $preco = 420;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  12;



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } elseif ($quartos == "9"){
        $preco = 455;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  13;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } 
    elseif ($quartos == "10"){
        $preco = 490;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  14;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    }  elseif ($quartos == "11"){
        $preco = 525;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  15;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }  elseif ($quartos == "12"){
        $preco = 560;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  16;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } 
    elseif ($quartos == "13"){
        $preco = 595;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  17;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($quartos == "14"){
        $preco = 630;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  18;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } 
    elseif ($quartos == "15"){
        $preco = 665;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  19;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } 
    elseif ($quartos == "16"){
        $preco = 700;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  20;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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
    } elseif ($quartos == "17"){
        $preco = 735;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  21;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($quartos == "18"){
        $preco = 770;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  22;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } 
    elseif ($quartos == "19"){
        $preco = 805;
         $_SESSION['preco'] = $preco;
         $qtd_horas=  23;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } 
    elseif ($quartos == "20"){
        $preco = 840;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  24;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } 
    elseif ($quartos == "21"){
        $preco = 875;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  25;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } 
    elseif ($quartos == "22"){
        $preco = 910;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  26;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } 
    elseif ($quartos == "23"){
        $preco = 945;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  27;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } 

    elseif ($quartos == "24"){
        $preco = 980;
        $_SESSION['preco'] = $preco;
        $qtd_horas=  28;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } 
    
    else{
        echo "Preço R$ :Acima de 24 Horas enviaremos um orçamento Especial <br>";

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
    if ($qtd_horas == "3" || $qtd_horas <= 3 ){
        $preco = 135;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }elseif($qtd_horas == "4"){
        $preco = 162;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif($qtd_horas == "5"){
        $preco = 189;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif ($qtd_horas == "6"){
        $preco = 216;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }   elseif($qtd_horas == "7"){
        $preco = 243;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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
    

    } elseif ($quartos == "8"){
        $preco = 270;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }elseif ($qtd_horas == "9"){
        $preco = 297;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif ($qtd_horas == "10"){
        $preco = 324;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif ($qtd_horas == "11"){
        $preco = 351;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif ($qtd_horas == "12"){
        $preco = 378;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif ($qtd_horas == "13"){
        $preco = 405;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    }
    elseif ($qtd_horas == "14"){
        $preco = 432;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($qtd_horas == "15"){
        $preco = 459;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($qtd_horas == "16"){
        $preco = 486;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($qtd_horas == "17"){
        $preco = 513;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } elseif ($qtd_horas == "18"){
        $preco = 540;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($qtd_horas == "19"){
        $preco = 567;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($qtd_horas == "20"){
        $preco = 594;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } elseif ($qtd_horas == "21"){
        $preco = 621;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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
    } elseif ($qtd_horas == "22"){
        $preco = 648;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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

    } elseif ($qtd_horas == "23"){
        $preco = 675;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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


    } elseif ($qtd_horas == "24"){
        $preco = 702;
        $_SESSION['preco'] = $preco;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
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
    echo '<h6 class="my-0">Cep</h6>' ;
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
        $preco = 135;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  5;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';


        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif($quartos == "2"){
        $preco = 162;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  6;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';


        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';


    }
    elseif($quartos == "3"){
        $preco = 189;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  7;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';




        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';

        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
     
    elseif($quartos == "4"){
        $preco = 216;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  8;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';


        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
    elseif($quartos == "5"){
        $preco = 243;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  9;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';


        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    }
    elseif ($quartos == "6"){
        $preco = 270;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  10;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';


        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }   elseif($quartos == "7"){
        $preco = 297;
        $_SESSION['preco'] = $preco;
        $qtd_horas = 11;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($quartos == "8"){
        $preco = 324;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  12;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }elseif ($quartos == "9"){
        $preco = 351;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  13;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($quartos == "10"){
        $preco = 378;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  14;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "11"){
        $preco = 405;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  15;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "12"){
        $preco = 432;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  16;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "13"){
        $preco = 459;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  17;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    }
    elseif ($qtd_horas == "14"){
        $preco = 486;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  18;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';




        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';
    } elseif ($qtd_horas == "15"){
        $preco = 513;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  19;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "16"){
        $preco = 540;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  20;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "17"){
        $preco = 567;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  21;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "18"){
        $preco = 594;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  22;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "19"){
        $preco = 621;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  23;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "20"){
        $preco = 648;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  24;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';


        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "21"){
        $preco = 675;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  25;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "22"){
        $preco = 702;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  26;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';


        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "23"){
        $preco = 729;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  27;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';


        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';



        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
        echo '</form>';
        echo ' <form action="casa.html" method="get">';        echo '<br>';

        echo '<center> <button class="btn btn-success" type="submit">Voltar</button></center> ';

        echo '</form>';

    } elseif ($qtd_horas == "24"){
        $preco = 756;
        $_SESSION['preco'] = $preco;
        $qtd_horas =  28;

        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Preço R$</h6>' ;
        echo '<h6 class="text-muted">'.$preco.'</h6>';
        echo '</div>';



        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
        echo '<div>';
        echo '<h6 class="my-0">Quantidade de horas </h6>' ;
        echo '<h6 class="text-muted">'.$qtd_horas.'</h6>';
        echo '</div>';
        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';

        echo '<span class="text-muted">   <div id="divLar"> </div>   </span>';
        echo '</li>';
        echo ' <hr class="mb-4">';
        echo ' <form action="dados_2.php" method="get">';
        echo ' <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Orçamento</button>';
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

              <a href="#!">falecom@poplimpeza.com.br</a>
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
