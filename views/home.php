<?php 
	$categoria[0] = array('Banco de Dados','text-info');
	$categoria[1] = array('Programação','text-success');
	$categoria[2] = array('Sistema Operacional','text-primary');
?>
<!-- home -->
<div class="row">
	<!-- direito -->
	<div class="col-md-8">
		<h4 class="pb-2 pt-3 mb-4 border-bottom text-muted text-uppercase">
        	Últimos posts <small class="font-italic text-capitalize">#Feed</small>
        </h4>
        <?php for ($i=0; $i < 3; $i++):?>
        <div class="p mb-5">
			<div class="row">
				<div class="p mb-2 align-self-center">
					<a href="<?php echo URL.'post/ler/1'; ?>" class="ml-3">
						<img src="<?php echo URL; ?>assets/images/semimg.png" width="280">
					</a>
				</div>
				<div class="col pb-0 ">
					<strong class="<?php echo $categoria[$i][1]; ?> text-uppercase"><?php echo $categoria[$i][0]; ?></strong>
					<a href="<?php echo URL.'post/ler/1'; ?>" style="text-decoration: none;">
						<h5 class="text-secondary">Configurar apache, php e phpmyadmin at <?php if($i==0):?>Linux MINT: PHP e phpmyadmin at Linux MINT<?php endif;?> </h5>
					</a>
					<p class="text-muted font-italic mb-0">16 de Abril de 2019 publicado por <a href="#">Salumão</a></p>
					<p class="mt-2"><a href="<?php echo URL.'post/ler/1';?>" class="font-italic">Leia mais!</a></p>
				</div>
			</div>
		</div>
		<?php endfor; ?>
		<!-- sobre o projeto -->
		<div class="col border-top pt-3 text-justify">
			<h2 class="text-muted">Sobre o projeto</h2>
	  		<p class="mb-0 mb-3">Este blog irá abordar assuntos relacionados à área da tecnologia da informação, programação, banco de dados e outros tópicos como resumos de artigos, posts com questões, mapas mentais, um verdadeiro acervo pessoal para estudo.</p>
	  		<p>
	  			Todos os artigos que serão produzidos deverá conter no final a referência ou mesmo a citação. Caso encontre alguma falha, seja de português ou 
	  			de conceito, favor entre em contato. Embora este artigo tenha neste primeiro momento apenas um autor, vocês, que estão lendo neste blog, poderão
	  			, sem pestanejar, colaborar com o que está sendo produzindo. Além disso, estou sempre aberto à sugestões de assuntos para abordar aqui.
	  		</p>
	  		<p>Sem mais, agradeço desde já sua visita!</p>
	  		<a href="<?php echo URL.'sobre'; ?>" class="btn btn-secondary">Saiba mais sobre o projeto</a>
		</div>
		<!-- /.sobre o projeto-->
	</div>
	<!-- /.direito -->

	<!-- esquerdo -->
	<div class="col-md-4">
		<?php include DIR.'/views/include/_sideRight.php'; ?>
	</div>
	<!-- /.esquerdo -->
</div>
<!-- /.home -->