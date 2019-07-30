<?php 
	class empresaController extends controller {	      
       
        public function index(){
            $dados = array();
            $c = new Categorias();
            $dados['categorias'] = $c->getCategorias();

            $this->loadViewTemplate("empresa", $dados);
        }    

	}

 ?>