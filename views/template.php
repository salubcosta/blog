<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="shortcut icon" href="<?php echo URL;?>assets/images/s.png" type="image/png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>assets/css/bootstrap.min.css"> 
	<title>Salumao.com.br</title>
</head>
<body>
	<!-- menu -->
	<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 0;">
      <div class="container">
      <a class="navbar-brand" href="<?php echo URL.'home'; ?>">Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo $view=='home'?'active':''; ?>">
          <a class="nav-link" href="<?php echo URL.'home'; ?>">Iníco</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Desenvolvimento</a>
            <a class="dropdown-item" href="#">Banco de Dados</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Resumos</a>
          </div>
        </li>
        <li class="nav-item <?php echo $view=='sobre'?'active':''; ?>">
          <a class="nav-link" href="<?php echo URL.'sobre'; ?>">Sobre</a>
        </li>
        <li class="nav-item <?php echo $view=='contato'?'active':''; ?>">
          <a class="nav-link" href="<?php echo URL.'contato'; ?>">Contato</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Faça uma busca..." aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
    </div>
  </nav>
	<!-- /.menu -->

  <!-- topo-->
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="media">
            <a href="<?php echo URL.'home'; ?>" class="navbar-brand d-flex align-items-center text-secondary">
              <img src="<?php echo URL; ?>assets/images/s.png" class="align-self-center mr-0">
              <div class="media-body">
                <h1 class="mt-0 mb-0">alumão</h1>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <p>Este blog irá tratar de assuntos relacionados à área de TI, resumos, traduções de artigos e outros.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.topo -->
  
  <!-- conteúdo -->
  <div class="container">
    <?php $this->carregarViewNoTemplate($view, $dados);?>
  </div>
  <!-- /.conteúdo -->
  <footer class="pt-5 pb-5" >
    <div class="container">
      <div class="row pt-5 border-top">
        <div class="col-12 col-md text-center mb-5">
          <small class="d-block mb-3 text-muted">&copy; 2019 - Salumao.com.br</small>
          <small class="font-italic">"Talk is cheap. Show me the code" -<br />Linus Torvalds</small>
        </div>
        <div class="col-6 col-md">
          <h5>Links</h5>
          <ul class="list-unstyled text-small">
            <li><a href="<?php echo URL.'novidades'; ?>" class="text-muted">Últimas postagens</a></li>
            <li><a href="<?php echo URL.'destaque'; ?>" class="text-muted">Mais lidos</a></li>
            <li><a href="<?php echo URL.'contato'; ?>" class="text-muted">Contato</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Sobre</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo URL.'sobre'; ?>">O blog</a></li>
            <li><a class="text-muted" href="<?php echo URL.'autor'; ?>">Autor</a></li>
          </ul>
        </div>
         <div class="col-6 col-md">
          <h5>Mídias Sociais</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://GitHub.com/salubcosta" target="_blank">GitHub</a></li>
            <li><a class="text-muted" href="https://Twitter.com/salubcosta" target="_blank">Twitter</a></li>
            <li><a class="text-muted" href="https://fb.com/salubcosta" target="_blank">Facebook</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?php echo URL;?>assets/js/bootstrap.min.js"></script>
</body>
</html>