<?php

 class Categorias extends model{
   
    public function getCategorias(){
        $array = array();

        $sql = "SELECT * from categorias";
        $sql = $this->db->query($sql);
    
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
    
        return $array;
    }

    public function getNome($id){
        $nome = '';

        $sql = "SELECT titulo from categorias where id = '$id'";
        $sql = $this->db->query($sql);
    
        if ($sql->rowCount() > 0) {
            $nome = $sql->fetch();
        }
    
        return $nome;
    }
}
