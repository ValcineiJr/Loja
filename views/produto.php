<div class="row mt-5">
    <div class="col-md-6 info-img">
        <img class="img-fluid" src="<?php echo BASE."assets/images/produtos/".$produto['imagem']; ?>" alt="">
    </div>
    <div class="col-md-6 info mb-5">
        <h1><?php echo ucfirst($produto['nome']); ?></h1>
        <h3 class="my-3"><?php echo "R$: ".number_format($produto['preco'], 2, ',', ''); ?><br></h3>
        <h3 class="my-3"><?php echo "Quantidade em estoque: ".$produto['quantidade']; ?><br></h3> 
        <a href="<?php echo BASE."carrinho/add/".$produto['id']; ?>" id="comprar2" class="btn btn-success mt-5">Adicionar ao Carrinho <i class="fas fa-cart-plus"></i></a>       
    </div>
</div><br>
<div class="row">
    <div class="col-md-8 offset-md-2 info desc">
            <h1 class="mb-5 text-center">------ Descrição ------</h1>
        <h3><p><?php echo ucfirst($produto['descricao']); ?></p></h3>
    </div>
</div>

