<h1><?php print_r($nome[0]); ?></h1>
<div class="row">
    
        <?php foreach($produtos as $produto):  ?>
        <div class="col-lg-3 col-xs-12 col-md-4 col-sm-5">
            <div class="card my-4" style="width: 15rem;">
            <img src="<?php echo BASE; ?>assets/images/produtos/<?php echo $produto['imagem']; ?>" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title"><?php echo ucfirst($produto['nome']);  ?></h5>
                <p class="card-text">R$: <?php echo number_format($produto['preco'], 2, ',', '');  ?></p>
                <a href="<?php echo BASE."produto/ver/", $produto['id'];  ?>" id="comprar" class="btn btn-primary">Ver mais <i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
        </div>
        <?php endforeach; ?>
    
</div>