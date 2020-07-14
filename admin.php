<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Pop Serviços - Fonte de Limpeza">
  <meta name="author" content="Creative Tim">
  <title>Pop Serviços</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.1.0" rel="stylesheet">
  <link type="text/css" href="./assets/css/style.css" rel="stylesheet">


  
</head>

<body>
  
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
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
         
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/POPLIMPEZA/" target="_blank" data-toggle="tooltip" title="Pop no Face">
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
              <a href="#" target="_blank" class="btn btn-neutral btn-icon">
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
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-hero section-shaped ">
        <div class="shape shape-style-1 shape-primary ">
            <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container py-lg-md d-flex">
         
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
   
    
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300">
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
                <h4 class="mb-1"> <center>Aministração </center>
                </h4>
                <p class="mt-0"> </p>
                              
                <form class="form-horizontal" method="POST" action="valida.php" enctype="multipart/form-data">
                  <fieldset>
                
                <!-- Campo: Nome -->
                            
                 <!-- Campo: email -->
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Seu Email" type="email" name="email_admin" required>
                  </div>
                </div>
              
              
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Senha" type="password" name="senha_admin" required>
                  </div>
                </div>
              
                <center>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-inverse">Entrar</button>
               
              
                  </fieldset>
                </form>

                <p class="text-center" text-danger">
                  <?php if (isset ($_SESSION['loginErro'])) {
                    echo $_SESSION['loginErro'];
                    unset ($_SESSION['loginErro']);
                  }
                  ?>
                </p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  </main>
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
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"   style="color: #33D644;"> Pop  </h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="cadastro.html">Cadastro</a>
            </li>
            <li>
              <a href="admin.php">Login</a>
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

              <a href="#!">falepop@poplimpeza.com.br</a>
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
  <!-- Core -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.1.0"></script>

  <a href="https://api.whatsapp.com/send?phone=551198273-5585&text=Ola" Style=" position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;" target="_blank"> <i style="margin-top:16px" class="fa fa-whatsapp"></i> </a>


</body>

</html>
