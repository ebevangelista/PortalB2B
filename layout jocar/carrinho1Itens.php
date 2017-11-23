<?php include 'headerLogado.php' ?>
			
	<div id="divBreadcrumbs" class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><a href="telaInicialLogado.php">Início</a> > <strong>Carrinho</strong></div>
		<div class="col-md-7 text-center"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><h1>Carrinho</h1></div>
		<div class="col-md-7 text-center"></div>
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div id="carrinhoBreadcrumbs">
				<ul class="list-inline text-center text-nowrap">
				<li>
					<a href="carrinho1Itens.php">
						<img src="img/carrinho1ItensAtivo.png" height="120" width="168">
					</a>
				</li>
				<li>
					<a href="carrinho2Condicoes.php">
						<img src="img/carrinho2Condicoes.png" height="120" width="168">
					</a>
				</li>
				<li>
					<a href="carrinho3Finalizar.php">
						<img src="img/carrinho3Finalizar.png" height="120" width="168">
					</a>
				</li>
				<li>
					<a href="carrinho4Visualizar.php">
						<img src="img/carrinho4Viisualizar.png" height="120" width="101">
					</a>
				</li>
				</ul>
			</div>
			
			<div id="divCarrinho">
				<div class="row text-center">
					<div class="col-md-3">
						<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
					</div>
					<div class="col-md-6">
					<h3>3 EM 1 FOSCO 18L BRANCO</h3>
					<label>PREÇO:</label> <strong>R$ 250,08</strong><BR>
					
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
								<div class="btn-group dropdown" role="group">
								  <button class="btn btn-default dropdown-toggle btnFiltro" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong>
									<span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li><a href="#">FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong></a></li>
									<li><a href="#">FILIAL 2 - <strong>DISTRIBUIDORA LOPES MS</strong></a></li>
								  </ul>
								</div>
					</div>
					<div class="col-md-3">
						<h1>R$ 750,24</h1>
						<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnExcluiFull" data-toggle="modal" data-target="#modalAtencaoMultiplo">
						<img class="text-center" src="img/icon/btnExcluiItem.png" height="20" width="20">&nbsp;&nbsp;EXCLUIR ITEM</button>
					</div>
				</div>
				<br>
				<div class="row text-center">
					<div class="col-md-3">
						<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
					</div>
					<div class="col-md-6">
					<h3>3 EM 1 FOSCO 18L BRANCO</h3>
					<label>PREÇO:</label> <strong>R$ 250,08</strong><BR>
					
								<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[2]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[2]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[2]">
												  <span class="glyphicon glyphicon-plus"></span>
								  </button>
								</div>
								
								<br>
								<div class="btn-group dropdown" role="group">
								  <button class="btn btn-default dropdown-toggle btnFiltro" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong>
									<span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li><a href="#">FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong></a></li>
									<li><a href="#">FILIAL 2 - <strong>DISTRIBUIDORA LOPES MS</strong></a></li>
								  </ul>
								</div>
					</div>
					<div class="col-md-3">
						<h1>R$ 750,24</h1>
						<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnExcluiFull" data-toggle="modal" data-target="#modalAtencaoMultiplo">
						<img class="text-center" src="img/icon/btnExcluiItem.png" height="20" width="20">&nbsp;&nbsp;EXCLUIR ITEM</button>
					</div>
				</div>
				<br>
				<div class="row text-right">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<div class="row text-center">
							<div class="col-md-12">
								<h4><label>Valor total:</label> <strong>1.500,48</strong></h4>
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull" data-toggle="modal" data-target="#modalAtencaoMultiplo"><strong>AVANÇAR</strong></button>
					</div>
				</div>
			</div>
		<div class="col-md-2"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>