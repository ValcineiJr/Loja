<?php 
	class produtoController extends controller {	      
       
        public function index(){}	
            
        public function ver($id = ''){
         if (!empty($id)) {
             $dados = array();
                $c = new Categorias();
                $p = new Produtos();

                $dados['categorias'] = $c->getCategorias();
                $dados['produto']    = $p->getProduto($id);

             $this->loadViewTemplate("produto", $dados);
            }else{
                header("Location:".BASE."error");
            }
        }

	}

 ?>