<?php

session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  $logado=false;
  header('location:login.php');
  }

$logado = true;
   

        ?>
<html lang="pt-br">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" type="image/png" href="view/img/ref_icon.png" />

    <link href="view/css/style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body>
  <!-- ======= Header ======= --> 
    <header id="header" class="fixed-top">   
    <!-- .nav-menu -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
        <a class="navbar-brand" style="font-size: 40px; font-family: emoji;" href="#">CompraCerta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php">Início</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="produtos.php">Hortifruti</a></li>
                  <li><a class="dropdown-item" href="produtos.php">Hortifruti</a></li>
                  <li><a class="dropdown-item" href="produtos.php">Hortifruti</a></li>
                </ul>               
                              
              </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meu Perfil</a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="meus_enderecos.php">Endereços</a></li>
                  <li><a class="dropdown-item" href="minhas_compras.php">Minhas Compras</a></li>
                  <li><a class="dropdown-item" href="editar_dados_usr.php">Editar Meus Dados</a></li>
                </ul>               
                              
              </li>
              </li>

          </ul>
          <a href="carrinho.php">
            <i class="fa fa-shopping-cart fa-2x cor-black"></i>
            <span class="badge badge-primary badge-pill adm-conf-emb-span ml-1">5</span>
          </a>
        </div>
      </div>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->


    <!-- MY ADRESS -->
    <div class="margintop2">
    <div class="row my-adress-display">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body d-flex justify-content-center">
            <h5 class="card-text my-adress-txt">Adicionar novo endereço</h5>
            <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-home fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Endereço 1</h5>
            <p class="card-text txt-color-grey">Vila Rosa Margarida do Buque 55E</p>
            <p class="card-text txt-color-grey">Apartamento 202, Pernambués</p>    
            <p class="card-text txt-color-grey">Salvador, BA, 560430-999</p>       
            <p class="card-text txt-color-grey">Brasil</p>          
            <p class="card-text txt-color-grey">Telefone: (71) 99999-9999</p> 
            <a href="editar_criar_endereco.php" class="btn btn-teal w-100 mb-2">Editar</a>
            <a href="#" class="btn btn-red w-100">Remover</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <i class="fa fa-home fa-3x" aria-hidden="true"></i>
            <h5 class="card-title">Endereço 2</h5>
            <p class="card-text txt-color-grey">Avenida Linguagens Triangulares, 88A</p>
            <p class="card-text txt-color-grey">Edifício Girassol, Cabula</p>    
            <p class="card-text txt-color-grey">Salvador, BA, 827430-229</p>       
            <p class="card-text txt-color-grey">Brasil</p>          
            <p class="card-text txt-color-grey">Telefone: (71) 99999-9999</p> 
            <a href="#" class="btn btn-teal w-100 mb-2">Editar</a>
            <a href="#" class="btn btn-red w-100">Remover</a>
          </div>
        </div>
      </div>
    </div>
  </div> 
    
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="footer-info">
                <h3>Mercado CompraCerta</h3>
                <p class="pb-3"><em>Endereço: R. da Mangueira, 33 - Nazaré, Salvador - BA, 40040-400</em></p>
                <p>
                  Salvador <br>
                  Bahia, Brasil<br><br>
                  <strong>Telefone:</strong> <a href='#'>+55 (71) 0800-0000</a><br>
                  <strong>Email:</strong> <a
                    href='#'>CompraCerta@gmail.com</a><br>
                </p>
              </div>
            </div>
           </div>
      </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; <strong><span>CompraCerta</span></strong>.<br> Todos os direitos são reservados aos seus respectivos autores.
        </div>
        <div class="credits">
          Designed by <a href="#">PATEM</a>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>