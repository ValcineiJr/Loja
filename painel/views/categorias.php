<h1>Categorias</h1>
<a href="<?php echo BASE; ?>/Categorias/add" class="btn btn-primary">Adicionar Categoria</a>

<table class="table table-striped table-dark mt-3">
<thead>
    <tr>
        <th width="80%">Título</th>
        <th width="20%" class="text-center">Ações</th>
    </tr>
</thead>   
<tbody>
    <?php foreach($categorias as $categoria): ?>
        <tr>
            <td><?php echo ucfirst($categoria['titulo']); ?></td>
            <td><a class="btn mr-2 btn-primary" href="<?php echo BASE."/categorias/editar/".$categoria['id']; ?>">Editar</a> 
            <a class="btn btn-danger" href="<?php echo BASE."/categorias/remover/".$categoria['id']; ?>">Remover</a></td>
        </tr>
    <?php endforeach; ?>
</tbody>   

</table>