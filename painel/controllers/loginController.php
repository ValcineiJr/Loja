<?php 
	class loginController extends controller {			

		public function index(){        
            $dados = array(
                'aviso' => ''
            );

            if (isset($_POST['usuario']) && !empty($_POST['usuario']))  {
                $usuario = addslashes($_POST['usuario']);
                $senha   = md5($_POST['senha']);

                $adm = new Admins();

                $dados['aviso'] = $adm->login($usuario, $senha);
                
            }else{
                $dados['aviso'] = "Não deixe nenhum campo vazio!";
            }
            $this->loadView('login', $dados);
        }	
        
        public function sair(){
            unset($_SESSION['admlogin']);
            header("Location:".BASE);
        }

	}

 ?>