<?php
require_once 'environment.php';

if(ENV == 'development'){
	define('DBHOST', '127.0.0.1'); //IP LOCAL - loopback
	define('DBNAME', 'blog');
	define('DBUSER', 'root');
	define('DBPASS', '');	
}else{
	define('DBHOST', ''); 
	define('DBNAME', '');
	define('DBUSER', '');
	define('DBPASS', '');	
}

// Auto carregamento das classes do blog
spl_autoload_register(function($class){
	if(file_exists(DIR.'/controllers/'.$class.'.php')):
		require_once DIR.'/controllers/'.$class.'.php';
	elseif(file_exists(DIR.'/models/'.$class.'.php')):
		require_once DIR.'/models/'.$class.'.php';
	else:
		require_once DIR.'/core/'.$class.'.php';
	endif;
});
?>