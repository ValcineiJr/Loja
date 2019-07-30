<h1>Produtos - Adicionar</h1>
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
     <input type="text" style="width:400px;" class="form-control" name="nome" placeholder="Nome do produto">
    </div>
    <div class="form-group">
     <textarea type="text" style="width:400px;" class="form-control" name="descricao" placeholder="Descrição"></textarea>
    </div>
    <div class="form-group">
        <select name="categoria" style="width:400px;" class="form-control">
            <?php foreach($categorias as $categoria): ?>
                <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['titulo']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
     <input type="text" style="width:400px;" class="form-control" name="preco" placeholder="Preço">
    </div>
    <div class="form-group">
     <input type="text" style="width:400px;" class="form-control" name="qt" placeholder="Quantidade">
    </div>
    <div class="form-group">
     <input type="file" name="imagem">
    </div>
    <input type="submit" value="Adicionar" class="btn btn-success">
</form>