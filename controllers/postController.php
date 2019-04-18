<?php 

class postController extends controller{

	public function index(){
		$this->carregarTemplate('post',[]);
	}

	public function ler($id =''){
		$dados['id'] = $id;
		if(!empty($id) and is_numeric($id)){
			$this->carregarTemplate('post',$dados);
		}else{
			echo 'Artigo não encontrado'; //invocar página não encontrada
			exit;
		}
	}
}

 ?>