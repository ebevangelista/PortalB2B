<?php include 'headerLogado.php' ?>
<?php include 'slider.php'?>
<?php include 'sidebar.php'?>
			
			<div id="divConteudo" class="col-md-8">
				<h2>
				<a id="btnEncolheLateral" href="telaInicialLogadoLateralEncolhida.php" type="button" class="btn  btn-default btn-xs" data-toggle="collapse" data-target="#lateral">
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
				
				<div id="divProdutosGrid" class="row">
					<div class="col-md-4">
						<div id="divProdutoGrid">
						<p class="labelCaixa">
							<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
							<span class="text">CAIXA<BR>12 UN</span>
						</p>
						<center>
						<a href="produtoIndividualLogado.php">
						<img class="text-center" src="img/fotoProduto1.jpg" height="150" width="150">
						<h3>FARINHA DE TRIGO EMEGÊ</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 48,00</strong></h3>
						
						<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[1]">
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
					
					<div class="col-md-4">
						<div id="divProdutoGrid">
						<center>
						<a href="#">
						<img class="text-center" src="img/fotoProduto2.jpg" height="150" width="150">
						<h3>MACARRÃO TIPO ESPAGUETE</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 2,37</strong></h3>
						
						<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[2]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[2]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[2]">
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
					
					<div class="col-md-4">
						<div id="divProdutoGrid">
						<p class="labelCaixa">
							<img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
							<span class="text">CAIXA<BR>24 UN</span>
						</p>
						<center>
						<a href="#">
						<img class="text-center" src="img/fotoProduto3.jpg" height="150" width="99">
						<h3>MACARRÃO TIPO PARAFUSO</h3></a>
						
						<small>Qt. Disp: 9</small>
						
						<h3><strong>R$ 96,00</strong></h3>
						
						<div class="btn-group divGroupQuantidade" role="group">
								  <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[3]">
												  <span class="glyphicon glyphicon-minus"></span>
								  </button>
								  <input type="text" name="quant[3]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
								  <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[3]">
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

                <div id="divProdutosGrid" class="row">
                    <div class="col-md-4">
                        <div id="divProdutoGrid">
                            <p class="labelCaixa">
                                <img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
                                <span class="text">CAIXA<BR>12 UN</span>
                            </p>
                            <center>
                                <a href="produtoIndividualLogado.php">
                                    <img class="text-center" src="img/fotoProduto1.jpg" height="150" width="150">
                                    <h3>FARINHA DE TRIGO EMEGÊ</h3></a>

                                <small>Qt. Disp: 9</small>

                                <h3><strong>R$ 48,00</strong></h3>

                                <div class="btn-group divGroupQuantidade" role="group">
                                    <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[1]">
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

                    <div class="col-md-4">
                        <div id="divProdutoGrid">
                            <center>
                                <a href="#">
                                    <img class="text-center" src="img/fotoProduto2.jpg" height="150" width="150">
                                    <h3>MACARRÃO TIPO ESPAGUETE</h3></a>

                                <small>Qt. Disp: 9</small>

                                <h3><strong>R$ 2,37</strong></h3>

                                <div class="btn-group divGroupQuantidade" role="group">
                                    <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[2]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                    <input type="text" name="quant[2]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
                                    <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[2]">
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

                    <div class="col-md-4">
                        <div id="divProdutoGrid">
                            <p class="labelCaixa">
                                <img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
                                <span class="text">CAIXA<BR>24 UN</span>
                            </p>
                            <center>
                                <a href="#">
                                    <img class="text-center" src="img/fotoProduto3.jpg" height="150" width="99">
                                    <h3>MACARRÃO TIPO PARAFUSO</h3></a>

                                <small>Qt. Disp: 9</small>

                                <h3><strong>R$ 96,00</strong></h3>

                                <div class="btn-group divGroupQuantidade" role="group">
                                    <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[3]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                    <input type="text" name="quant[3]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
                                    <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[3]">
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

                <div id="divProdutosGrid" class="row">
                    <div class="col-md-4">
                        <div id="divProdutoGrid">
                            <p class="labelCaixa">
                                <img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
                                <span class="text">CAIXA<BR>12 UN</span>
                            </p>
                            <center>
                                <a href="produtoIndividualLogado.php">
                                    <img class="text-center" src="img/fotoProduto1.jpg" height="150" width="150">
                                    <h3>FARINHA DE TRIGO EMEGÊ</h3></a>

                                <small>Qt. Disp: 9</small>

                                <h3><strong>R$ 48,00</strong></h3>

                                <div class="btn-group divGroupQuantidade" role="group">
                                    <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[1]">
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

                    <div class="col-md-4">
                        <div id="divProdutoGrid">
                            <center>
                                <a href="#">
                                    <img class="text-center" src="img/fotoProduto2.jpg" height="150" width="150">
                                    <h3>MACARRÃO TIPO ESPAGUETE</h3></a>

                                <small>Qt. Disp: 9</small>

                                <h3><strong>R$ 2,37</strong></h3>

                                <div class="btn-group divGroupQuantidade" role="group">
                                    <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[2]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                    <input type="text" name="quant[2]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
                                    <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[2]">
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

                    <div class="col-md-4">
                        <div id="divProdutoGrid">
                            <p class="labelCaixa">
                                <img class="text-center iconeCaixa" src="img/icon/caixa.png" height="15" width="15">
                                <span class="text">CAIXA<BR>24 UN</span>
                            </p>
                            <center>
                                <a href="#">
                                    <img class="text-center" src="img/fotoProduto3.jpg" height="150" width="99">
                                    <h3>MACARRÃO TIPO PARAFUSO</h3></a>

                                <small>Qt. Disp: 9</small>

                                <h3><strong>R$ 96,00</strong></h3>

                                <div class="btn-group divGroupQuantidade" role="group">
                                    <button type="button" class="btn btn-default btn-number btnMenos" data-type="minus" data-field="quant[3]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                    <input type="text" name="quant[3]" class="btn btn-default inputQuantidadeCompra" value="1" min="1" max="10">
                                    <button type="button" class="btn btn-default btn-number btnMais" data-type="plus" data-field="quant[3]">
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