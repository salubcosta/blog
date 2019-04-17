<!-- home -->
<div class="row">
	<!-- direito -->
	<div class="col-md-8">
		<h4 class="font-italic pb-2 pt-3 mb-4 border-bottom">
        	Últimos posts
        </h4>
        <?php for ($i=0; $i < 3; $i++):?>
        <div class="p mb-3">
			<div class="row">
				<div class="p">
					<a href="<?php echo URL.'post'; ?>" class="ml-3">
						<img src="<?php echo URL; ?>assets/images/semimg.png" width="280">
					</a>
					<p class="ml-3"><a href="<?php echo URL.'post'; ?>">Continue lendo</a></p>
				</div>
				<div class="col">
					<div class="media-body">
						<h4 class="text-dark">Configurar apache, php e phpmyadmin at Linux MINT</h4>
						<p class="text-muted font-italic mb-0">16 de Abril de 2019 publicado por <a href="#">Salumão</a></p>
						<p class="text-justify">
							Este artigo irá versar sobre como instalar e configurar um servidor apache no linux mint, precisamente falando, o linux mint mate cinammon 19.1. Também vamos config...
						</p>
					</div>
				</div>
			</div>
		</div>
	<?php endfor; ?>
	</div>
	<!-- /.direito -->

	<!-- esquerdo -->
	<div class="col-md-4">
		<?php include DIR.'/views/include/_sideRight.php'; ?>
	</div>
	<!-- /.esquerdo -->
</div>
<!-- /.home -->