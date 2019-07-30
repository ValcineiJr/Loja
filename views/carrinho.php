<h1 class="my-5">Carrinho de Compras</h1>
<?php if(isset($_SESSION['carrinho'])): ?>
<table class="table table-warning table-striped">
    <thead>
        <tr class="text-left">
            <th>Imagem: </th>
            <th>Nome: </th>
            <th>Valor: </th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php $subtotal = 0; ?>
        <?php foreach($produtos as $produto): ?>
        <tr>
            <td width="25%"><img  width="100" src="<?php echo BASE."assets/images/produtos/".$produto['imagem']; ?>" alt=""></td>
            <td width="25%"><?php echo $produto['nome']; ?></td>
            <td width="25%">R$: <?php echo number_format($produto['preco'],'2', ',', ''); ?></td>
            <td width="25%"><a class="btn btn-primary" href="<?php echo BASE."produto/ver/".$produto['id']; ?>">Detalhes</a> 
                            <a class="btn btn-danger" href="<?php echo BASE."carrinho/remove/".$produto['id']; ?>">Remover</a></td>
        </tr>
        <?php $subtotal += $produto['preco']; ?>
        <?php endforeach; ?>
        <tr>
            <td></td>
            <td></td>
            <td>Sub-total R$: <?php echo number_format($subtotal,'2', ',', '') ?></td>
            <td><a href="" id="comprar" style="height:100%;" class="btn btn-success">Finalizar Compra</a></td>
        </tr>
    </tbody>
</table>
<?php else: ?>
<h1>Sem itens</h1>
<?php endif; ?>