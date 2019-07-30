<?php 
	class homeController extends controller {
		
		public function __construct(){
			$adm = new Admins();
				if ($adm->isLogged() == false) {
					header("Location: ".BASE."/login");
				}
		}

		public function index(){
			$dados = array();
			$this->loadViewTemplate('home', $dados);

		}		

	}

 ?>