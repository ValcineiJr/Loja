<style>
    ul.pagination li a{        
        color: #000 !important;
    }
    ul.pagination li a:hover{
        background-color: green !important;
    }
</style>
<h1>Produtos</h1>
<a href="<?php echo BASE; ?>/produtos/add" class="btn btn-primary">Adicionar Produto</a>

<table class="table table-striped table-dark mt-3 text-center">
<thead>
    <tr>
        <th width="16,6%">Imagem</th>
        <th width="16,6%">Nome</th>
        <th width="16,6%">Categoria</th>
        <th width="16,6%">Preço</th>
        <th width="16,6%">Quantidade</th>
        <th width="16,6%" class="text-center">Ações</th>
    </tr>
</thead>   
<tbody>
    <?php foreach($produtos as $produto): ?>
        <tr>
            <td><img height="80" width="80" src="<?php echo "http://localhost/loja/assets/images/produtos/".$produto['imagem']; ?>" alt=""></td>
            <td><?php echo ucfirst($produto['nome']); ?></td>
            <td><?php echo ucfirst($produto['categoria']); ?></td>
            <td>R$: <?php echo number_format($produto['preco'],'2',',',''); ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td><a class="btn mr-2 btn-primary" href="<?php echo BASE."/produtos/editar/".$produto['id']; ?>">Editar</a> 
            <a class="btn btn-danger" href="<?php echo BASE."/produtos/remover/".$produto['id']; ?>">Remover</a></td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
<div class="pag">
    <div class="subpag" style=" width:50%; margin:0 auto;">
        <ul class="pagination" style="width:50%; margin-left:auto; margin-right:auto;">
        <?php 
            $conta = ceil($totalProdutos / $limite);
                for($q=1; $q<=$conta;$q++): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo BASE."/produtos?p=".$q; ?>"><?php echo $q; ?></a>
                    </li>
        <?php   endfor; ?>
        </ul>
</div>
</div>

