<?php 

class controller{

	public function __construct(){
	}

	public function carregarTemplate($view, $dados){
		include DIR.'/views/template.php';
	}

	public function carregarViewNoTemplate($view, $dados){
		extract($dados);
		include DIR.'/views/'.$view.'.php';
	}
}

?>