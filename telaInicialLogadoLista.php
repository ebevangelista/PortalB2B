<?php include 'headerLogado.php' ?>
<?php include 'slider.php'?>
<?php include 'sidebar.php'?>
			<div id="divConteudo" class="col-md-8">
				<h2>
				<a id="btnEncolheLateral" href="telaInicialLogadoListaLateralEncolhida.php" type="button" class="btn  btn-default btn-xs" data-toggle="collapse" data-target="#lateral">
				<center><img src="img/icon/menu.png" width="20" height="20"></center></a>&nbsp;&nbsp;Produtos
				</h2>
				<div class="btn-group" role="group" aria-label="...">
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
					&nbsp;&nbsp;
					<div class="btn-group dropdown" role="group">
					  <button class="btn btn-default dropdown-toggle btnFiltro" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						MOSTRAR <strong>30 PRODUTOS POR PÁGINA</strong>
						<span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#">MOSTRAR <strong>30 PRODUTOS POR PÁGINA</strong></a></li>
						<li><a href="#">MOSTRAR <strong>60 PRODUTOS POR PÁGINA</strong></a></li>
						<li><a href="#">MOSTRAR <strong>90 PRODUTOS POR PÁGINA</strong></a></li>
					  </ul>
					</div>
					&nbsp;&nbsp;
					<div class="btn-group dropdown" role="group">
					  <button class="btn btn-default dropdown-toggle btnFiltro" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						CLASSIFICAR POR <strong>NOME</strong>
						<span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#">CLASSIFICAR POR <strong>NOME</strong></a></li>
						<li><a href="#">CLASSIFICAR POR <strong>PREÇO</strong></a></li>
						<li><a href="#">CLASSIFICAR POR <strong>MAIS VENDIDOS</strong></a></li>
						<li><a href="#">CLASSIFICAR POR <strong>MAIS BEM AVALIADOS</strong></a></li>
					  </ul>
					</div>
					&nbsp;&nbsp;
					<a class="btn btn-default btn-sm btn-group btnFiltro" role="group" href="#">
					  <img class="text-center" src="img/icon/seta-sentido.png" height="20" width="20">
					</a>
					&nbsp;&nbsp;
					<a class="btn btn-default btn-sm btn-group btnFiltro" role="group" href="#">
					  <img class="text-center" src="img/icon/lista.png" height="20" width="20">&nbsp;&nbsp;LISTA
					</a>
				</div>
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[1]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[1]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[1]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[2]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[2]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[2]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[3]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[3]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[3]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[4]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[4]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[4]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[5]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[5]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[5]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[6]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[6]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[6]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[7]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[7]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[7]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
				
				<div id="divProdutoLista" class="row">
					<div >
						<div class="col-md-4">
							<a class="labelCaixa">
								<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
								<span class="text">EMB<BR>04 UN</span>
							</a>
							<a href="produtoIndividualLogado.php">
							<img class="text-center" src="img/fotoProduto.jpg" height="150" width="150">
						</div>
						
						<div class="col-md-4 text-center">
						<h3>3 EM 1 FOSCO 18L BRANCO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 250,08</strong></h3>
						</div>
						
						<div class="col-md-4 text-center">
							<div class="input-group text-center inputGroupQuantidade ">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMenos" disabled="disabled" data-type="minus" data-field="quant[8]">
										  <span class="glyphicon glyphicon-minus"></span>
									  </button>
								  </span>
								  <input type="text" name="quant[8]" class="form-control input-number inputQuantidadeCompra" value="1" min="1" max="10">
								  <span class="input-group-btn">
									  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[9]">
										  <span class="glyphicon glyphicon-plus"></span>
									  </button>
								  </span>
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
						
				
				<div class="row">
					<div class="col-md-12 text-center">
						<br>
						<button id="btnCarregarMais" type="button" class="btn btn-primary btn-lg">CARREGAR MAIS PRODUTOS</button>
					</div>
				</div>
				<br><br>
			</div>
			<div class="col-md-1">.</div>
	
	
		
<?php include 'footerLogado.php'?>