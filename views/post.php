<div class="row">
	<div class="col-md-8">
		<div class="p mt-3">
			<div class="card mb-3">
				<img src="<?php echo URL;?>assets/images/semimg.png" style="width: auto; max-height: 350px;">
			</div>
			<h4 class="text-dark">Configurar apache, php e phpmyadmin at Linux MINT</h4>
			<p class="text-muted font-italic mt-3">16 de Abril de 2019 publicado por <a href="#">Salumão</a> # <a href="http://discus.com/bar.html#disqus_thread">Link</a></p>
			<div class="text-justify mt-3">
				<p>Este artigo irá versar sobre como instalar e configurar um servidor apache no linux mint, precisamente falando, o linux mint mate cinammon 19.1. Também vamos config...</p>
				<?php for ($i=0; $i < 3; $i++):?>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
				</p>
			<?php endfor; ?>
			</div>
		</div>
		<p class="p">
			<h4>Relacionados</h4>
		</p>
		<hr />
			<div id="disqus_thread"></div>
			<script>
			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://salumao-com-br.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<script id="dsq-count-scr" src="//salumao-com-br.disqus.com/count.js" async></script>  
	</div>
	<div class="col-md-4">
		<?php include DIR.'/views/include/_sideRight.php'; ?>
	</div>
	

</div>