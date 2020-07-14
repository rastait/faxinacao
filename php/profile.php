<?php 



session_start() ;


if(isset($_POST['alt']))
{
  $_SESSION['alt'] = $_POST['alt'];
}

if(isset($_POST['tipo']))
{
  $_SESSION['tipo'] = $_POST['tipo'];
}

if(isset($_POST['lar']))
{
  $_SESSION['lar'] = $_POST['lar'];
}

$alt = isset($_SESSION['alt'])?$_SESSION['alt']:"";
$tipo = isset($_SESSION['tipo'])?$_SESSION['tipo']:"";
$lar = isset($_SESSION['lar'])?$_SESSION['lar']:"";

//Preços base para cálculo:



$quarto = 10;
$banheiro = 10;
$hora = 10;


if(isset($_POST['finaliza']))
{
  $chat_id="998255109"; //meu chat id
  // $chat_id="998255109"; //Willians
  

  $token="1010025305:AAFjo5RZzIo0w3so9rZv9pj0N4qTUCIFsB4";

  $mensagem= "Oi";

  $url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem;

  $execucao = file_get_contents($url);
  session_unset();
  echo "<script>window.location.replace('profile.php')</script>";
}


?>



<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

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
        <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="../assets/css/argon.css?v=1.1.0" rel="stylesheet">
        <link type="text/css" href="../assets/css/style.css" rel="stylesheet">
        <script src="acao.js"></script>
        <style>
            @import url('css/global.css');
        </style>
        <script src="js/jquery.min.js"></script>
        <script src="js/global-top.js"></script>

      
        
      </head>
</head>

<body>
  
<!--menu-->

<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom" style="background-color:  #0E5AA7;">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="./index.html">   
          <img alt="image" src="../material/branco.png" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img alt="image" src="./assets/img/brand/blue.png">
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
                <span class="nav-link-inner--text">Contratar</span>
              </a>
              <div class="dropdown-menu">
                <a href="pos-obra.html" class="dropdown-item">Limpeza Pós-obra</a>
                <a href="pre-mudanca.html" class="dropdown-item">Pré-Mundança</a>
                <a href="reforma.html" class="dropdown-item">Reforma</a>
                <a href="faxina-geral.html" class="dropdown-item">Faxina geral</a>
                <a href="pos-mudanca.html" class="dropdown-item">  Pós-mudança</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="Pop no Face">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Pop no Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
           
            <li class="nav-item">
              
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class=" mr-2"></i>
                </span>
                <span class="nav-link-inner--text">Entrar</span>
                
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<!--menu-->



<div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2>Formulário de Agendamento</h2>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted"></span>
          <span class="badge badge-secondary badge-pill"></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">
                
                <?php 

                switch($alt):
                  case 'LimpezaPadrao': ?>
                  Limpeza Padrão
                  <?php 
                  break;
                  case 'LimpezaPesada': ?>
                  Limpeza Pesada
                  <?php
                  break;
                  case 'PassarRoupa': ?>
                  Passar Roupa
                  <?php
                  endswitch;
                  ?>
              </h6>
              <small class="text-muted">Breve descrição</small>
            </div>
            <span class="text-muted">                 <div id="divTeste"> </div>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Segundo produto</h6>
              <small class="text-muted">Breve descrição</small>
            </div>
            <span class="text-muted">R$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Terceiro item</h6>
              <small class="text-muted">Breve descrição</small>
            </div>
            <span class="text-muted">R$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Código de promoção</h6>
              <small>CODIGOEXEMEPLO</small>
            </div>
            <span class="text-success">-R$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (BRL)</span>
            <strong id="PrecoTotalbrl">
              <?php
              if(isset($_SESSION['precoTotal']))
              {
                echo $_SESSION['precoTotal'];
              }else{
                echo "Preencha ao lado para obter o preço";
              }
              ?>
            </strong>
            

          </li>
        </ul>

        
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Código promocional">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Resgatar</button>
            </div>
          </div>
        
      </div>

      <div class="col-md-8 order-md-1">
        
        
        
        <div>
          <!-- <button id="close-area01">_</button> -->
          <div id="area01">
            
            
            <form id="request01" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                
        <h4 class="mb-3">&nbsp; Escolha um Serviço</h4>
        <button class="
        <?php 
        
        if($alt == 'LimpezaPadrao')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
        " name="alt" value="LimpezaPadrao"> limpeza padrão </button>
        <button href="" class="
        <?php 
        
        if($alt == 'LimpezaPesada')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
        " name="alt" value="LimpezaPesada"> limpeza pesada </button> 
        <button href="" class="
        <?php 
        
        if($alt == 'PassarRoupa')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
        " name="alt" value="PassarRoupa"> passar roupa </button>

        
        
    
      

<?php



switch($alt):
case "LimpezaPadrao":



?>

<?php require('unify.php'); ?>




<?php
break;
case "LimpezaPesada":?>
<h4 class="mb-3">Qual tipo de Limpeza Pesada?</h4>



<button class="
<?php 
        
        if($tipo == 'rotina')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
" name="tipo" value="rotina"> De rotina </button>
<button href="" class="
<?php 
        
        if($tipo == 'preMudanca')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
" name="tipo" value="preMudanca"> Pré-mudança </button> 
<button href="" class="
<?php 
        
        if($tipo == 'posObra')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>" name="tipo" value="posObra"> Pós-obra </button>



<?php require('unify.php'); ?>



<?php
break;
case "PassarRoupa": ?>



<?php require('unify.php'); ?>



<br><br>





<?php endswitch;?>


<br><br>




<?php require('step2.php'); ?>
  </div>

  
  </form>
  
</div><!-- fim do meu código -->




          <div class="row">
       









  
                </div>
         
      </div>
    </div>

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
                <a href="pos-obra.html">Pós-Obra</a>
              </li>
              <li>
                <a href="reforma.html">Reforma</a>
              </li>
              <li>
                <a href="pre-mudanca.html">Pré-Mudança</a>
              </li>
              <li>
                <a href="pos-mudanca">Pós-Mudança</a>
              </li>
              <li>
                <a href="faxina-geral.html">Faxina Geral</a>
              </li>
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4"  style="color:  #0E5AA7"> Entrar  </h5>
    
            <ul class="list-unstyled">
              <li>
                <a href="cadastro.html">Cadastro</a>
              </li>
              <li>
                <a href="logar.html!">Logar</a>
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

                <a href="#!">atendimento@poplimpeza.com.br</a>
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
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="www.poplimpeza.com.br"  style="color:  #0E5AA7" >Pop Serviços</a>
      </div>
      <!-- Copyright -->
    
    </footer>
  <!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/onscreen/onscreen.min.js"></script>
  <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>
  <script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.1.0"></script>  
  <script src="js/global.js"></script>

</body>

</html>
