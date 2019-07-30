<?php

 class Produtos extends model{
   
    public function getProdutos(){
        $array = array();

        $sql = "SELECT * from produtos";
        $sql = $this->db->query($sql);
    
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
    
        return $array;
    }

    public function prodsCarrinho($id = array()){        
        
        $sql = "SELECT * from produtos where id in (".implode(',', $id).")";    
        $sql = $this->db->query($sql);        

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }else{
            $array = array();
        }

        return $array;
    }

    public function getProduto($id){
        $array = array();

        $sql = "SELECT * from produtos where id = '$id'";
        $sql = $this->db->query($sql);
    
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
    
        return $array;
    }

    public function listar($qt = 0){
        $array = array();

        $sql = "SELECT * from produtos ";
        if ($qt > 0) {
            $sql .= "Limit ".$qt;
        }
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
    
        return $array;
    }

    public function listar_categoria($cat){
        $array = array();

        $sql = "SELECT * from produtos where id_categoria = '$cat'";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}
