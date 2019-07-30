<?php 
	class produtosController extends controller {	      
        
        public function index(){
            $dados = array();
            $offset = 0;
            $limit = 10;

            if (isset($_GET['p']) && !empty($_GET['p'])) {
                $p = addslashes($_GET['p']);
                $offset = ($limit * $p) - $limit;
            }
            $p = new Produtos();

            $dados['limite'] = $limit;
            $dados['totalProdutos'] = $p->getTotalProdutos();
            $dados['produtos'] = $p->getProdutos($offset, $limit);

            $this->loadViewTemplate("produtos/produtos", $dados);
        }	
        
        public function add(){
            $dados = array();
           

                $p = new Produtos();
                $c = new Categorias();

                $dados['categorias'] = $c->getCategorias();
                
                if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])) {
                    $nome = addslashes($_POST['nome']);
                    $descricao = addslashes($_POST['descricao']);
                    $categoria = addslashes($_POST['categoria']);
                    $preco = addslashes($_POST['preco']);
                    $quantidade = addslashes($_POST['qt']);
                    $imagem = $_FILES['imagem'];

                    
                    if (in_array($imagem['type'], array('image/jpeg', 'image/png', 'image.jpg'))) {
                        /*    $ext = '.jpg';
                        if ($imagem['type'] == 'image/png') {
                            $ext = '.png';
                        }*/
                        $imagemNome = md5(time().rand(0,9999)).'.png';
                        move_uploaded_file($imagem['tmp_name'],'../assets/images/produtos/'.$imagemNome);

                        $p->inserir($nome, $descricao, $categoria, $preco, $quantidade, $imagemNome);
                    }
                }
            
            $this->loadViewTemplate("produtos/produtosAdd", $dados);
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
                $p = new Produtos();
                $p->removerProduto($id);

                header("Location: ".BASE."/produtos");
            }
        }

	}

 ?>