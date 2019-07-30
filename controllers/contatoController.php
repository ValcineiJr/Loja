<?php 
	class contatoController extends controller {	      
       
        public function index(){
            $dados = array();
            $c = new Categorias();
            $dados['categorias'] = $c->getCategorias();

            $this->loadViewTemplate("contato", $dados);
        }    

	}

 ?>