<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo URL;?>/assets/images/s.png" type="image/png">
	<meta charset="utf-8">
	<title>Template</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/assets/css/estilo.css">
</head>
<body>
	<div class="menu">
		<div class="menuint">
			<ul>
				<a href=""><li><img src="<?php echo URL;?>/assets/images/s.png"></li></a>
				<a href="<?php echo URL; ?>"><li>Início</li></a>
				<a href="#"><li>Categorias</li></a>
				<a href="#"><li>Contato</li></a>
			</ul>
			<div class="menuright"><input type="text" name="search"><input type="submit" value="Buscar"> </div>	
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class="topo">
		<div class="topoint">
			<div class="topoleft">
				<h1>#<a href="<?php echo URL; ?>">Salumao.com.br</a></h1>
			</div>
			<div class="toporight">
				<div class="conteudo">
					<p>Este blog irá tratar de assuntos relacionados à área de TI</p>
					<p>Resumos, traduções de artigos, questões entre outros.</p>
				</div>
			</div>
		</div>

	</div>
	<div class="container">
		<?php $this->carregarViewNoTemplate($view, $dados);?>
	</div>
</body>
</html>