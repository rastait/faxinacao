<?php

$servico = $_GET["servico"];
$limpezaPesada = isset ($_GET["limpezaPesada"])?$_GET["limpezaPesada"]:"[não informado]";
$lar =  isset ($_GET["lar"])?$_GET["lar"]:"[não informado]";        
$banheiros = isset ($_GET["banheiros"])?$_GET["banheiros"]:"[não informado]";  
$quartos = isset ($_GET["quartos"])?$_GET["quartos"]:"[não informado]";  
$email = isset ($_GET["email"])?$_GET["email"]:"[não informado]";  
$telefone = isset ($_GET["telefone"])?$_GET["telefone"]:"[não informado]";  
$data = isset ($_GET["data"])?$_GET["data"]:"[não informado]";  
$cep = isset ($_GET["cep"])?$_GET["cep"]:"[não informado]";  

$qtd_horas = isset ($_GET["qtd_horas"])?$_GET["qtd_horas"]:"[não informado]";  
$horario = isset ($_GET["horario"])?$_GET["horario"]:"[não informado]";  
$nome =  isset ($_GET["nome"])?$_GET["nome"]:"[não informado]";  
$complemento =  isset ($_GET["complemento"])?$_GET["complemento"]:"[não informado]";  
$obs = isset ($_GET["obs"])?$_GET["obs"]:"[não informado]";  


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Faxinação</title>
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
                <span class="nav-link-inner--text text-white">Contratar</span>
              </a>
              <div class="dropdown-menu">
                <a href="casa.html" class="dropdown-item">Minha Casa</a>
                <a href="empresa.html" class="dropdown-item">Minha Empresa</a>
               
              </div>
            </li>
            <a class=" text-white"  href="trabalhe.html" role="tab">Trabalhe na Pop</a>

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
       echo "Tipo de Serviço :  $servico <br>";
       echo "Tipo de limpeza pesada : $limpezaPesada<br>";
       echo "Local :$lar <br>";
       echo "Quartos :$quartos<br> ";
       echo "Banheiros :$banheiros <br>";
       echo "Email :$email <br>";
       echo "Telefone :$telefone <br>";
       echo "Data :$data <br>";
       echo "Quantidade de horas :$qtd_horas <br>";
       echo "Horario :$horario <br>";
       echo "Nome :$nome <br>";
       echo "Complemento :$complemento <br>";
       echo "Complemento :$obs <br>";
   
   //calculos
       if ($quartos == "2"){
           $preco = 180;
           echo "Preço :$preco <br>";
   
       }elseif($quartos == "3"){
           $preco = 225;
    
           echo "Preço :$preco <br>";
   
   
       }
       elseif($quartos == "4"){
           $preco = 270;
    
           echo "Preço :$preco <br>";
   
   
       }
       elseif ($quartos == "5"){
           $preco = 315;
    
           echo "Preço :$preco <br>";
   
   
       }   elseif($quartos == "6"){
           $preco = 360;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($quartos == "7"){
           $preco = 405;
    
           echo "Preço :$preco <br>";
   
   
       }elseif ($quartos == "1"){
           $preco = 135;
    
           echo "Preço :$preco <br>";
   
   
       }else{
           
       }
   
   //calculos
   
   
      }
   
   
   }else if  ($servico == "Passar Roupa"){
   
       
       echo "Tipo :de Serviço :  $servico <br>";
       echo "Local :$lar <br>";
       echo "Email :$email <br>";
       echo "Telefone :$telefone <br>";
       echo "Data :$data <br>";
       echo "Quantidade de horas :$qtd_horas <br>";
       echo "Horario :$horario <br>";
       echo "Nome :$nome <br>";
       echo "Cep :$cep <br>";
       echo "Complemento :$complemento <br>";
       echo "Obvervação :$obs <br>";
   
       //calculos
       if ($qtd_horas == "3" ){
           $preco = 66;
           echo "Preço :$preco <br>";
   
       }elseif($qtd_horas == "4"){
           $preco = 88;
    
           echo "Preço :$preco <br>";
   
       }
       elseif($qtd_horas == "5"){
           $preco = 110;
    
           echo "Preço :$preco <br>";
   
       }
       elseif ($qtd_horas == "6"){
           $preco = 315;
    
           echo "Preço :$preco <br>";
   
       }   elseif($qtd_horas == "7"){
           $preco = 132;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($quartos == "8"){
           $preco = 154;
    
           echo "Preço :$preco <br>";
   
   
       }elseif ($qtd_horas == "9"){
           $preco = 176;
    
           echo "Preço :$preco <br>";
   
   
       }
       elseif ($qtd_horas == "10"){
           $preco = 198;
    
           echo "Preço :$preco <br>";
   
   
       }
       elseif ($qtd_horas == "11"){
           $preco = 220;
    
           echo "Preço :$preco <br>";
   
   
       }
       elseif ($qtd_horas == "12"){
           $preco = 242;
    
           echo "Preço :$preco <br>";
   
   
       }
       elseif ($qtd_horas == "13"){
           $preco = 264;
    
           echo "Preço :$preco <br>";
   
   
       }
       elseif ($qtd_horas == "14"){
           $preco = 286;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "15"){
           $preco = 308;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "16"){
           $preco = 330;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "17"){
           $preco = 352;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "18"){
           $preco = 374;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "19"){
           $preco = 396;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "20"){
           $preco = 428;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "21"){
           $preco = 440;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "22"){
           $preco = 462;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "23"){
           $preco = 484;
    
           echo "Preço :$preco <br>";
   
   
       } elseif ($qtd_horas == "24"){
           $preco = 506;
    
           echo "Preço :$preco <br>";
   
   
       }
   
   
       else{
           
   
           echo "Valor Acima de 24 Horas <br>";
   
   
       }
   
   //calculos
   
   
   }else if ($servico == "Limpeza Padrão"){
   
   
       echo "Tipo :de Serviço :  $servico <br>";
       echo "Local :$lar <br>";
       echo "Quartos :$quartos<br> ";
       echo "Banheiros :$banheiros <br>";
       echo "Email :$email <br>";
       echo "Telefone :$telefone <br>";
       echo "Data :$data <br>";
       echo "Quantidade de horas :$qtd_horas <br>";
       echo "Horario :$horario <br>";
       echo "Nome :$nome <br>";
       echo "Complemento :$complemento <br>";
       echo "Obvervação :$obs <br>";
   
   
   }else if ($servico == "Limpeza Pós Obra"){
   
   
       echo "Tipo :de Serviço :  $servico <br>";
       echo "Local :$lar <br>";
       echo "Quartos :$quartos<br> ";
       echo "Banheiros :$banheiros <br>";
       echo "Email :$email <br>";
       echo "Telefone :$telefone <br>";
       echo "Data :$data <br>";
       echo "Quantidade de horas :$qtd_horas <br>";
       echo "Horario :$horario <br>";
       echo "Nome :$nome <br>";
       echo "Complemento :$complemento <br>";
       echo "Obvervação :$obs <br>";
   
   
   }else {
   
       echo "<br>Campo nome obrigatorio";
       $_SESSION['servico'] = "Campo Serviço obrigatorio";
       header("Location: casa.html");
   }
   ?>

<div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2>Orçamento</h2>
    </div>
    <!--tabela-->
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Serviço</h6>
          <small class="text-muted">Breve descrição</small>
        </div>
        <span class="text-muted">                 <div id="divTeste" aria-required="true"> </div>
        </span>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div id="lar">
          <h6 class="my-0">Seu Lar</h6>
          <small class="text-muted">Breve descrição</small>
        </div>
        <span class="text-muted">   <div id="divLar"> </div>   </span>
      </li>
     
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (BRL)</span>
        <strong> <div id="divTeste"> </div></strong>
      </li>
    </ul>
        

        <!--tabela-->


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
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="www.poplimpeza.com.br"  style="color:  #0E5AA7" >Pop Serviços</a>
      </div>
      <!-- Copyright -->
    
    </footer>

    <script>
     

    //
    var inputs = document.querySelectorAll('input');

function verificar() {
    return [].filter.call(inputs, function (input) {
        return input.checked;
    }).length;
}
document.querySelector('button').addEventListener('click', function () {
    var valido = verificar();
    if (!valido) alert('Falta escolher uma checkbox!');
    else alert('Tudo ok!');
});

    //


     // Serviços
      function servicos(valor){
 
     if (valor == "Passar Roupa"){
      document.getElementById("preco").style.display = 'block';
      document.getElementById('divTeste').innerHTML = valor;
          
     var display = document.getElementById("sumir").style.display;
     if (display == "block"){
       document.getElementById("sumir").style.display = 'none';
              document.getElementById("sumir").style.display = 'none';

       document.getElementById("lar").style.display = 'none';

     }else
       document.getElementById("sumir").style.display = 'none'; 
       document.getElementById("lar").style.display = 'none';

      } else if  (valor == "Limpeza Pesada" || "Limpeza Padrão" || "Limpeza Pós Obra" ){
       
       if (valor == "Limpeza Pesada") {

        document.getElementById("pesadaAparece").style.display = 'block';
       }else{
        document.getElementById("pesadaAparece").style.display = 'none';

       }

        document.getElementById('divTeste').innerHTML = valor;
        document.getElementById("preco").style.display = 'block';
        document.getElementById("lar").style.display = 'block';
      
   if (display == "none"){
       document.getElementById("sumir").style.display = 'block';
       document.getElementById("lar").style.display = 'block';

   }else
       document.getElementById("sumir").style.display = 'block';
       document.getElementById("lar").style.display = 'block';
 
      } 
 
      }
                // Serviços ''

                //seu lar

//lar
function Lar(valor2){

  document.getElementById('divLar').innerHTML = valor2;

}
//lar

//limpeza Pesada
function limpezaPesada(){
  var display = document.getElementById("sumir").style.display;
  document.getElementById("pesadaAparece").style.display = 'block';

}
//limpeza Pesada

      </script>

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
