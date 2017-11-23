<?php include 'headerLogado.php' ?>
			
	<div id="divBreadcrumbs" class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><a href="telaInicialLogado.php">Início</a> > <strong>Fale conosco</strong></div>
		<div class="col-md-7 text-center"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><h1>Fale conosco</h1></div>
		<div class="col-md-7 text-center"></div>
	</div>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<input type="text" class="form-control" id="nome" placeholder="Seu nome"><br>
				<input type="email" class="form-control" id="email" placeholder="Seu e-mail"><br>
				<input type="text" class="form-control" id="assunto" placeholder="Assunto"><br>
				<textarea id="mensagem" class="form-control" rows="4" placeholder="Mensagem"></textarea><br>
				<button type="button" class="btn btn-primary btn-lg btn-block btnProdutoFull">ENVIAR</button>
				<br><br>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>