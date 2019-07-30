<?php

 class Admins extends model{

    public function isLogged(){
        if (isset($_SESSION['admlogin']) && !empty($_SESSION['admlogin'])) {
            return true;
        }else{
            return false;
        }
    }

    public function login($usuario, $senha){        
        
        $sql = "SELECT * from admins where usuario = '$usuario' and senha = '$senha'";
        $sql = $this->db->query($sql);

        if ($sql->rowCount()>0) {
            $sql = $sql->fetch();
            $_SESSION['admlogin'] = $sql['id'];

            header("Location: ".BASE);
        }else{
           return $dados['aviso'] = "Usuário ou/e Senha incorretos";
        }
    }
 }