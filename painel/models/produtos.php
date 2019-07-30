<?php

 class Produtos extends model{
   
    public function getProdutos($offset, $limit){
        $array = array();

        $sql = "SELECT *, (select categorias.titulo from categorias where categorias.id = produtos.id_categoria) as categoria from produtos limit $offset, $limit";
        $sql = $this->db->query($sql);
    
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
    
        return $array;
    }

    public function getTotalProdutos(){
        $q = 0;

        $sql ="SELECT count(*) as c from produtos";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $q = $sql->fetch();
            $q = $q['c'];
        }

        return $q;
    }

    public function inserir($nome, $descricao, $categoria, $preco, $quantidade, $imagemNome){
        $sql = "INSERT into produtos set nome ='$nome',descricao ='$descricao', id_categoria ='$categoria', preco ='$preco', quantidade ='$quantidade', imagem ='$imagemNome'";
        $this->db->query($sql);
    }

    public function removerProduto($id){
        $id = addslashes($id);

        $sql = "DELETE from produtos where id ='$id'";
        $this->db->query($sql);
    }
}
