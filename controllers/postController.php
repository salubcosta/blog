<?php 

class postController extends controller{

	public function index(){
		$this->carregarTemplate('post',[]);
	}

	public function ler($id = ''){
		if(!empty($id) and is_numeric($id)){
			echo 'Carregando postagem... Código: '.$id;
			exit;
		}else{
			echo 'Artigo não encontrado'; //invocar página não encontrada
			exit;
		}
	}
}

 ?>