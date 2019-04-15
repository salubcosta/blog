<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo URL;?>/assets/images/s.png" type="image/png">
	<meta charset="utf-8">
	<title>Salumao.com.br</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/assets/css/estilo.css">
</head>
<body>
	<!--##################### MENU #####################-->
	<div class="menu">
		<div class="menuint">
			<ul>
				<a href=""><li><img src="<?php echo URL;?>/assets/images/s.png"></li></a>
				<!--<a href="<?php echo URL; ?>"><li>Início</li></a>
				<a href="#"><li>Categorias</li></a>
				<a href="#"><li>Contato</li></a>-->
			</ul>
			<div class="menuright"><input type="text" name="search"><input type="submit" value="Buscar"> </div>	
		</div>
	</div>
	<!--##################### FIM MENU
	<div style="clear: both;"></div>-->
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
			<div class="spacex"></div>
		</div>
	</div>
	<!--##################### MENU #####################-->
	<div class="menu">
		<div class="menuint">
			<ul>
				<!--<a href=""><li><img src="<?php echo URL;?>/assets/images/s.png"></li></a>-->
				<a href="<?php echo URL; ?>"><li>Início</li></a>
				<a href="#"><li>Categorias</li></a>
				<a href="#"><li>Contato</li></a>
			</ul>
			<!--<div class="menuright"><input type="text" name="search"><input type="submit" value="Buscar"> </div>	-->
		</div>
	</div>
	<!--##################### FIM MENU #####################-->
	<div class="container">
		<?php $this->carregarViewNoTemplate($view, $dados);?>
	</div>
	<div class="rodape">
		<div class="rodapeint">
			<ul>
				<li><a href="#">Sobre</a></li>
				<li><a href="#">Categorias</a></li>
				<li><a href="#">Contato</a></li>
				<li><strong>Mídias Sociais:</strong></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
			</ul>
			<ul>
				<li><a href="#">Github</a>|</li>
				<li><a href="#">Linkedin</a></li>
			</ul>
		</div>
		<footer>
			<p>© 2019 Salumao.com.br | All rights reserved</p>
		</footer>
	</div>
</body>
</html>