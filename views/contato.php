<div class="row">
	<div class="col-md-8">
		<div class="p text-muted mt-3 text-justify">
			<h4>Página de contato</h4>
			<p>Neste pequeno espaço, você pode enviar uma mensagem para dar alguma sugestão, informar algum erro, ou o que bem entender! Sua mensagem será respondido, caso necessário, bem tempestivamente!</p>
			<hr />
		</div>
		<form>
			<div class="form-group">
			    <label for="formNome">Nome (obrigatório)</label>
			    <input type="text" class="form-control" id="formNome" placeholder="Informe seu nome..." name="nome">
		  	</div>
		  	<div class="form-group">
			    <label for="formEmail">E-mail (<small class="font-italic">Não será enviado spam!</small>)</label>
			    <input type="enail" class="form-control" id="formEmail" placeholder="Informe seu nome..." name="email">
		  	</div>
		  	<div class="form-group">
			    <label for="formAssunto">Assunto</label>
			    <input type="email" class="form-control" id="formAssunto" placeholder="Informe seu nome..." name="assunto">
		  	</div>
		  	<div class="form-group">
		  		<label for="formMsg">Mensagem</label>
		  		<textarea id="formMsg" class="form-control" placeholder="Informe sua mensagem" name="mensagem"></textarea>
		  	</div>
		  	<input type="submit" value="Segura essa aí!" class="btn btn-info">
		</form>
	</div>
	<div class="col-md-4">
		<?php include DIR.'/views/include/_sideRight.php'; ?>
	</div>
</div>