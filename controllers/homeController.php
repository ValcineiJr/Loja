<?php 
	class homeController extends controller {			

		public function index(){
			$dados = array(
				'categorias' => '',
				'produtos' => ''
			);

			$c = new Categorias();
			$u = new Produtos();

			$dados['categorias'] = $c->getCategorias();
			$dados['produtos'] = $u->listar(10);
			
			$this->loadViewTemplate('home', $dados);

		}		

	}

 ?>