<?php

session_start();
include_once("conexao.php");

?>
//
=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Faxinação -Limpeza">
  <meta name="author" content="RastaIt">
  <title>Faxinação</title>
  <!-- Favicon -->
  <link href="material/logo_novo/favicon.ico" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.1.0" rel="stylesheet">
  <link type="text/css" href="./assets/css/style.css" rel="stylesheet">

  <link type="text/css" href="style.css" rel="stylesheet">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156427377-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156427377-1');
</script>



  
</head>

<body>
  
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="./index.html">
          <img alt="image" src="material/logo_novo/logo_menu.png" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img alt="image" src="./assets/img/brand/branco.png">
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
                <span >Seja um parceiro</span>
              </a>
              
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Pop no Face">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Pop no Instagram">
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
                <span class="nav-link-inner--text">Cadastro</span>
                
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

  <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
    ?>

    <div class="position-relative " >
      <!-- Hero for FREE version -->
      <section class="section section-lg section-hero section-shaped ">
        <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary ">
          <span class="span-50"></span>
          <span class="span-50"></span>
          <span class="span-75"></span>
          <span class="span-100"></span>
          <span class="span-75"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
          
        </div>
        <div class="container">
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                     <iframe src="https://calendar.google.com/calendar/embed?src=falepopservicos%40gmail.com&ctz=America%2FSao_Paulo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
                 </section>

  
<!--  Novo -->


    <footer class="page-footer font-small indigo">

      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left ">
    
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
    
            <!-- Links -->
          
    <br> 
          <a href="index.html">
            <img alt="image" src="./assets/img/brand/Imagem 1.png">
          </a>

          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto ">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4"  style="color: #33D644;">Serviços</h5>
    
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
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4"   style="color: #33D644;"> POP  </h5>
    
            <ul class="list-unstyled">
              <li>
                <a href="cadastro.html">Cadastro</a>
              </li>
              <li>
                <a href="admin.html">Login</a>
              </li>
  
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #33D644;">Contato</h5>
    
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

                <a href="#!">(11) 98273-5585</a>
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
<!-- Footer -->
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


  <a href="https://api.whatsapp.com/send?phone=551198273-5585&text=Ola" Style=" position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;" target="_blank"> <i style="margin-top:16px" class="fa fa-whatsapp"></i> </a>

</body>

</html>
