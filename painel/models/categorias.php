<?php

 class Categorias extends model{

    public function getCategoria($id){
        $array = array();

        $sql = "SELECT * from categorias where id='$id'";
        $sql = $this->db->query($sql);
    
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
    
        return $array;
    }
   
    public function getCategorias(){
        $array = array();

        $sql = "SELECT * from categorias";
        $sql = $this->db->query($sql);
    
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
    
        return $array;
    }

    public function addCategoria($titulo){
        if (!empty($titulo)) {
            $sql = "INSERT into categorias set titulo ='$titulo'";
            $this->db->query($sql);
        }
    }

    public function removerCategoria($id){
        $id = addslashes($id);

        $sql = "DELETE from categorias where id ='$id'";
        $this->db->query($sql);

        $sql = "DELETE from produtos where id_categoria ='$id'";
        $this->db->query($sql);
    }

    public function editarCategoria($titulo, $id){
        if (!empty($titulo)) {
            $sql = "UPDATE categorias set titulo ='$titulo' where id='$id'";
            $this->db->query($sql);
        }
    }
}
