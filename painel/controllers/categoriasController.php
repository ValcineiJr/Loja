<?php 
	class categoriasController extends controller {	      
        
        public function index(){
            $dados = array();
            $c = new Categorias();

            $dados['categorias'] = $c->getCategorias();

            $this->loadViewTemplate("categorias", $dados);
        }	
        
        public function add(){
            $dados = array();
            if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                $titulo = addslashes($_POST['titulo']);
                $c = new Categorias();
                $c->addCategoria($titulo);
                header("Location: ".BASE."/categorias");
            }         

            $this->loadViewTemplate("categoriasAdd", $dados);
        }
      
        public function editar($id){
            $dados = array();
            $id = addslashes($id);
            $c = new Categorias();

            if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                $titulo = addslashes($_POST['titulo']);
                
                
                $c->editarCategoria($titulo, $id);
                header("Location: ".BASE."/categorias");
            }      
            $dados['categoria'] = $c->getCategoria($id);   

            $this->loadViewTemplate("categoriasEditar", $dados);
        }

        public function remover($id){
            if (!empty($id)) {
                $c = new Categorias();
                $c->removerCategoria($id);

                header("Location: ".BASE."/categorias");
            }
        }

	}

 ?>