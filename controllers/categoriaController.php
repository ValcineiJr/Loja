<?php 
	class categoriaController extends controller {	      
       
        public function index(){}	
            
        public function ver($id = ''){
            if (!empty($id)) {
                $id = explode("-", $id);             
                
                $dados = array();
                
                $c = new Categorias();
                $p = new Produtos();

                $dados['categorias'] = $c->getCategorias();
                $dados['produtos']   = $p->listar_categoria($id[1]);
                $dados['nome']      = $c->getNome($id[1]);
                $this->loadViewTemplate("categoria", $dados);
            }else{
                header("Location:".BASE."error");
            }
        }

	}

 ?>