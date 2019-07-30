<!doctype html>
  <head>
    <script src="https://kit.fontawesome.com/70806defb0.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>/assets/css/style.css">    
    <title>Painel</title>
  	</head>
  	<body>
	  <nav class="navbar navbar-expand-lg navbar-light bg-warning mb-5">
      <div class="container">
        <a href="<?php echo BASE; ?>" class="navbar-brand">
          <img src="<?php echo BASE; ?>/assets/images/logo.png" width="160" height="40" alt="LOGO">
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo BASE; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE; ?>/categorias">Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE; ?>/produtos">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE; ?>empresa">Vendas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE; ?>empresa">Usuários</a>
            </li>
          </ul>
        </div>
        <div class="ml-auto">
        <a href="<?php echo BASE."/login/sair"; ?>" class="btn btn-dark">Sair</a>            
        </div>
      </div>
	  </nav>
	  	<div class="container">
      <div class="body">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
		</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>