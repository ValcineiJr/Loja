<?php 
	class errorController extends controller {			

		public function index(){		
            $c = new Categorias();
            $dados['categorias'] = $c->getCategorias();

            $this->loadViewTemplate('naoencontrado', $dados);
		}		

	}

 ?>