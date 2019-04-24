<?php 

class categoriasController extends controller{

	public function index(){
		$this->carregarTemplate('categorias', []);
	}

	public function load($dados = ''){
		$cat['categoria'] = $dados;
		$this->carregarTemplate('categorias', $cat);	
	}

}

?>