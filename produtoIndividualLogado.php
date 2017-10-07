<?php include 'headerLogado.php' ?>
	<div id="divBreadcrumbs" class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><a href="">Início</a> > <a href="">Pintura</a> > <a href="">Econômica</a> > <strong>3 EM 1 FOSCO 18L BRANCO</strong></div>
		<div class="col-md-4 text-center">
				<div class="btn-group dropdown" role="group">
					  <button class="btn btn-default dropdown-toggle btnFiltro" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong>
						<span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#">FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong></a></li>
						<li><a href="#">FILIAL 2 - <strong>DISTRIBUIDORA LOPES MS</strong></a></li>
					  </ul>
					</div></div>
		<div class="col-md-2"></div>
		<div class="col-md-1"></div>
	</div>
	
	<!-- Modal modalAtencaoMultiplo -->
	<div class="modal fade" id="modalAtencaoMultiplo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Atenção!</h1>
		  </div>
		  <div class="modal-body">
			Este produto só pode ser vendido em múltiplos de 10 unidades!
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary btnProdutoFull" data-dismiss="modal">CONTINUAR COMPRANDO</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Modal modalSucessoInsercaoCarrinho -->
	<div class="modal fade" id="modalSucessoInsercaoCarrinho" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Tudo certo!</h1>
		  </div>
		  <div class="modal-body">
			Produto inserido no carrinho.
		  </div>
		  <div class="modal-footer">
			<a href="carrinho1Itens.php" type="button" class="btn btn-default btnSecundario">IR PARA O CARRINHO</a>
			<button type="button" class="btn btn-primary btnProdutoFull" data-dismiss="modal">CONTINUAR COMPRANDO</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Produto individual -->
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2 text-center">
			<img class="text-center" src="img/fotoProduto.jpg" height="200" width="200">
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12">
					<h1>3 EM 1 FOSCO 18L BRANCO</h1>
					<label>Embalagem:</label> <strong>01 UN</strong><br>
					<label>Unidade:</label> <strong>LT</strong><br>
					<label>Código:</label> <strong>20830</strong><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Código de barras:</label> <strong>7891019100033</strong><br><br>
				</div>
				<div class="col-md-6 text-center">
					<a href="" class="aFormasPagamento"><img class="text-center" src="img/icon/formasPagamento.png" height="15" width="20">&nbsp;&nbsp;FORMAS DE PAGAMENTO</a><br><br>
				</div>
			</div>
			
			<div id="divPromocao" class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-body">
						<div class="row">
							<div class="col-md-2 text-center">
								<img src="img/icon/promocao.png" height="30" width="30">
							</div>
							<div class="col-md-8 text-center">
								Compre 10 unidades e ganhe<br><strong>1 CORAL 3 EM 1 FOSCO 3,6L BRANCO</strong>
							</div>
							<div class="col-md-2 text-center">
								<img src="img/fotoProduto.jpg" height="50" width="50">
							</div>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
				<br>
					<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[1]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-plus"></span>
								  </button>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<h1>R$ 250,08</h1>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario" data-toggle="modal" data-target="#modalSucessoInsercaoCarrinho">
						<img class="text-center" src="img/icon/adicionarALista.png" height="20" width="20">&nbsp;&nbsp;ADICIONAR À LISTA</button>
				</div>
				<div class="col-md-6">
					<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull" data-toggle="modal" data-target="#modalAtencaoMultiplo">
						<img class="text-center" src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">&nbsp;&nbsp;COMPRAR</button>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row">
					<div class="col-md-12 text-center">
						<h2>Aproveite também</h2>
					</div>
					<div class="col-md-12">
						<div id="divProdutoMini" >
						<center>
						<a href="#">
						<img class="text-center" src="img/fotoProduto.jpg" height="100" width="100">
						<h4>3 EM 1 FOSCO 18L BRANCO</h4></a>
						<small><strong>EMB 04</strong></small><br>
						<small>Qt. Disp: 9</small>
						<h3><strong>R$ 2,84</strong></h3>
						<div class="row">
							<div class="col-md-6">
								<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario">
									<img class="text-center" src="img/icon/adicionarALista.png" height="20" width="20"></button>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull">
									<img class="text-center" src="img/icon/carrinhoBotaoCompra.png" height="20" width="20"></button>
							</div>
						</div>
						</center>
						</div>
					</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h2>Outras pessoas também compraram</h2>
			<div class="row">
						<div class="col-md-3">
							<div id="divProdutoGrid" >
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<center>
							<a href="#">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
							<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
							
							<small>Qt. Disp: 9</small>
							
							<h3><strong>R$ 250,08</strong></h3>
							
							<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[1]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-plus"></span>
								  </button>
							</div>
							
							  <br>
							<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull">
							<img class="text-center" src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">&nbsp;&nbsp;COMPRAR</button>
							
							<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario">
							<img class="text-center" src="img/icon/adicionarALista.png" height="20" width="20">&nbsp;&nbsp;ADICIONAR À LISTA</button>
							</center>
							</div>
						</div>
						
						<div class="col-md-3">
							<div id="divProdutoGrid" >
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<center>
							<a href="#">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
							<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
							
							<small>Qt. Disp: 9</small>
							
							<h3><strong>R$ 250,08</strong></h3>
							
							<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[1]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-plus"></span>
								  </button>
							</div>
							
							  <br>
							<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull">
							<img class="text-center" src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">&nbsp;&nbsp;COMPRAR</button>
							
							<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario">
							<img class="text-center" src="img/icon/adicionarALista.png" height="20" width="20">&nbsp;&nbsp;ADICIONAR À LISTA</button>
							</center>
							</div>
						</div>
						
						<div class="col-md-3">
							<div id="divProdutoGrid" >
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<center>
							<a href="#">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
							<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
							
							<small>Qt. Disp: 9</small>
							
							<h3><strong>R$ 250,08</strong></h3>
							
							<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[1]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-plus"></span>
								  </button>
							</div>
							
							  <br>
							<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull">
							<img class="text-center" src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">&nbsp;&nbsp;COMPRAR</button>
							
							<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario">
							<img class="text-center" src="img/icon/adicionarALista.png" height="20" width="20">&nbsp;&nbsp;ADICIONAR À LISTA</button>
							</center>
							</div>
						</div>
						
						<div class="col-md-3">
							<div id="divProdutoGrid" >
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<center>
							<a href="#">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
							<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
							
							<small>Qt. Disp: 9</small>
							
							<h3><strong>R$ 250,08</strong></h3>
							
							<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[1]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-plus"></span>
								  </button>
							</div>
							
							  <br>
							<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull">
							<img class="text-center" src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">&nbsp;&nbsp;COMPRAR</button>
							
							<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario">
							<img class="text-center" src="img/icon/adicionarALista.png" height="20" width="20">&nbsp;&nbsp;ADICIONAR À LISTA</button>
							</center>
							</div>
						</div>
						
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>