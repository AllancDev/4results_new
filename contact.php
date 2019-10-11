<?php
	include_once("./template/header.php");
?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Fale Conosco</h2>
			</div>
		</div>
	</div>
</section>
<section id="content">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="about-logo">
					<h3>Entre em contato</h3>
					<p style="font-size: 1.6em;">Estamos à disposição. <br />
						Ficaremos felizes em ajudar!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<!-- Form itself -->
				<form name="sentMessage" id="contactForm" novalidate>
					<h3></h3>
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control" placeholder="Digite seu nome completo: " id="name" required data-validation-required-message="Digite seu nome" />
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="email" class="form-control" placeholder="Digite seu email: " id="email" required data-validation-required-message="Digite seu email" />
						</div>
					</div>
					<div class="control-group" style="margin-top: 10px;">
						<div class="controls">
							<input type="text" class="form-control" placeholder="Nome da Empresa: " id="empresa" required data-validation-required-message="Nome da Empresa" />
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group" style="margin-top: 10px;">
						<div class="controls">
							<input type="text" class="form-control" placeholder="Telefone: " id="empresa" required data-validation-required-message="Nome da Empresa" />
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<textarea rows="10" cols="100" class="form-control" placeholder="Deixe sua mensagem: " id="message" required data-validation-required-message="Por favor digite sua mensagem" minlength="5" data-validation-minlength-message="Minimo 5 Caracteres" maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<div id="success"> </div> <!-- For success/fail messages -->
					<button type="submit" style="margin-top: 15px; background: #01b0f1; color: #fff; font-size: 1.2em;" class="btn btn-primary pull-right">Enviar</button><br />
				</form>
			</div>
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.121213215516!2d-49.30506878498574!3d-25.434210783786533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5daf9b78276c6776!2s4Results!5e0!3m2!1spt-BR!2sbr!4v1570479776495!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;  margin-top: 17px" allowfullscreen=""></iframe> </div>
		</div>
	</div>

</section>
<?php
include_once("./template/footer.php");
?>