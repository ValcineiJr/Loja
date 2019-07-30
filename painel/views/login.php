<!doctype html>
  <head>
    <script src="https://kit.fontawesome.com/70806defb0.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/css.css">    
<style>
    body{
        background-color: #333;
    }
    h1{
        color: white;
    }
    .aviso{
        font-weight: bolder;
        color: white;
    }
</style>
<title>Login</title>
</head>
<body>
    <div class="container">
    <div  class="row mt-5">
        <div class="col-md-6 offset-md-3">
                <h1 class="text-center mb-5">Login</h1>            
                <?php if(!empty($aviso)): ?>
                    <div class="aviso p-4 bg-danger mb-4">
                        <?php echo $aviso; ?> 
                    </div>
                <?php endif; ?>            
            <form method="POST">            
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>
                
                <input type="submit" class="btn btn-success"  value="Enviar">
                
            </form>
            
        </div>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>