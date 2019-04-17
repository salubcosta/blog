<?php 
	$categoria[2] = array('Programação','text-success');
	$categoria[0] = array('Sistema Operacional','text-primary');
	$categoria[1] = array('Banco de Dados','text-info');
?>
<!-- home -->
<div class="row">
	<!-- direito -->
	<div class="col-md-8">
		<h4 class="pb-2 pt-3 mb-4 border-bottom text-muted text-uppercase">
        	Últimos posts
        </h4>
        <?php for ($i=0; $i < 3; $i++):?>
        <div class="p mb-5">
			<div class="row">
				<div class="p mb-2 align-self-center">
					<a href="<?php echo URL.'post'; ?>" class="ml-3">
						<img src="<?php echo URL; ?>assets/images/semimg.png" width="280">
					</a>
					
				</div>
				<div class="col">
					<strong class="<?php echo $categoria[$i][1]; ?> text-uppercase"><?php echo $categoria[$i][0]; ?></strong>
					<a href="<?php echo URL.'post'; ?>" style="text-decoration: none;">
						<h5 class="text-secondary">Configurar apache, php e phpmyadmin at <?php if($i==0):?>Linux MINT: PHP e phpmyadmin at Linux MINT<?php endif;?> </h5>
					</a>
					<p class="text-muted font-italic mb-0">16 de Abril de 2019 publicado por <a href="#">Salumão</a></p>
					<p class="mt-2"><a href="<?php echo URL.'post';?>" class="font-italic">Leia mais!</a></p>
				</div>
			</div>
		</div>
		<?php endfor; ?>
		<!-- sobre o projeto -->
		<div class="col border-top pt-3">
			<h2 class="text-muted">Sobre o projeto</h2>
	  		<p class="mb-0 text-justify mb-3">Este blog irá abordar assuntos relacionados à área da tecnologia da informação, programação, banco de dados e outros tópicos como resumos de artigos, posts com questões, mapas mentais, um verdadeiro acervo pessoal para estudo.</p>
	  		<a href="#" class="btn btn-secondary">Saiba mais sobre o projeto</a>
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