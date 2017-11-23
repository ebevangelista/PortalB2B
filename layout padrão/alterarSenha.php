<?php include 'headerLogado.php' ?>
			
	<div id="divBreadcrumbs" class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><a href="telaInicialLogado.php">Início</a> > <strong>Alterar senha</strong></div>
		<div class="col-md-7 text-center"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><h1>Alterar senha</h1></div>
		<div class="col-md-7 text-center"></div>
	</div>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<br>
				<input type="password" class="form-control" id="inputSenhaAtual" placeholder="Senha atual"><br>
				<input type="password" class="form-control" id="inputNovaSenha" placeholder="Nova senha"><br>
				<input type="password" class="form-control" id="inputRepeteSenha" placeholder="Repita a nova senha"><br><br>
				<button type="button" class="btn btn-primary btn-lg btn-block btnProdutoFull">ALTERAR SENHA</button>
				<br><br>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>