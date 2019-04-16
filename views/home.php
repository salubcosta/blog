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
					<a href="#" class="ml-3">
						<img src="<?php echo URL; ?>assets/images/semimg.png" width="280">
					</a>
					<p class="ml-3"><a href="#">Continue lendo</a></p>
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
		<div class="p-3">
			<h4 class="font-italic">Sobre o projeto</h4>
        	<p class="mb-0 text-justify mb-3">Este blog irá abordar assuntos relacionados à área da tecnologia da informação, programação, banco de dados e outros tópicos como resumos de artigos, posts com questões, mapas mentais, um verdadeiro acervo pessoal para estudo.</p>
        	<a href="#" class="btn btn-secondary">Saiba mais sobre o projeto</a>
		</div>
		<div class="p-3">
            <h4 class="font-italic">Em outros lugares</h4>
            <ol class="list-unstyled">
              <li><a href="https://GitHub.com/salubcosta" target="_blank">GitHub</a></li>
              <li><a href="https://Twitter.com/salubcosta" target="_blank">Twitter</a></li>
              <li><a href="https://fb.com/salubcosta" target="_blank">Facebook</a></li>
            </ol>
          </div>
          <div class="p-3">
            <h4 class="font-italic">Mais lidos</h4>
            <ol class="list-unstyled">
              <li><a href="#" target="_blank">Como configurar Github no Windows?</a></li>
              <li><a href="#" target="_blank">Gerenciar permissão de usuário MariaDB</a></li>
              <li><a href="#" target="_blank">Configurar servidor WEB permitir .HTACCESS</a></li>
              <li><a href="#" target="_blank">COBIT 5 - Introdução</a></li>
              <li><a href="#" target="_blank">Python na prática</a></li>
            </ol>
            <a href="#" class="btn btn-secondary">Veja mais lidos</a>
          </div>
	</div>
	<!-- /.esquerdo -->
</div>
<!-- /.home -->