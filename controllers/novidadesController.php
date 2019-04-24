<?php 

class novidadesController extends controller{

	public function index(){
		$this->carregarTemplate('novidades', []);
	}
}

?>