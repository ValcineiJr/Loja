<?php 
	class carrinhoController extends controller {	      
       
        public function index(){
            $dados = array(
                'produtos' => ''
            );
            $prods = array();

            $p = new Produtos();
            $c = new Categorias();

            $dados['categorias'] = $c->getCategorias();

            if (isset($_SESSION['carrinho'])) {
                $prods = $_SESSION['carrinho'];
                $dados['produtos'] = $p->prodsCarrinho($prods);
            }
            $this->loadViewTemplate('carrinho', $dados);
        }	
            
        public function add($id = ''){
            if(!empty($id)){
               if (!isset($_SESSION['carrinho']) || (isset($_SESSION['carrinho']) && empty($_SESSION['carrinho']))) {
                    $_SESSION['carrinho'] = array();
               }
                    $_SESSION['carrinho'][] = $id;
                    header("Location: ".BASE."carrinho");
            }else{
                    header("Location:".BASE."error");
            }
            

        }

        public function remove($id){
             if (!empty($id)) {
                 foreach ($_SESSION['carrinho'] as $key => $value) {
                     if ($id == $value) {
                         unset($_SESSION['carrinho'][$key]);
                     }
                 }
             }
            header("Location: ".BASE."carrinho");         
        }

	}

 ?>