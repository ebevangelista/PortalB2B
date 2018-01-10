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
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div id="carrinhoBreadcrumbs">
				<ul class="list-inline text-center text-nowrap">
				<li>
					<a href="carrinho1Itens.php">
						<img src="img/carrinho1ItensConcluido.png" height="120" width="168">
					</a>
				</li>
				<li>
					<a href="carrinho2Condicoes.php">
						<img src="img/carrinho2CondicoesAtivo.png" height="120" width="168">
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
					<div class="col-md-6">
						<h3><label>Nome do cliente:</label> <strong>Marcelo Mendes</strong></h3>
						<div class="row text-center">
							<div class="col-md-6">
								<p><label>Limite de crédito:</label> <strong>R$ 3.000,00</strong></p>
							</div>
							<div class="col-md-6">
								<p><label>Limite disponível:</label> <strong>R$ 1.538,97</strong></p>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-md-12">
								<form class="form-horizontal">
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Forma de cobrança:</label>
										<div class="col-sm-8">
										  <select class="form-control">
											  <option>Boleto bancário</option>
											  <option>Cartão de débito</option>
											  <option>Cartão de crédito</option>
											</select>
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Forma de entrega:</label>
										<div class="col-sm-8">
										  <select class="form-control">
											  <option>Jadlog</option>
											  <option>CargoX</option>
											  <option>LG Transportes</option>
											</select>
										</div>
									  </div>
									  <div class="form-group">
										<label for="textareaObsPedido" class="col-sm-4 control-label">Obs. Pedido:</label>
										<div class="col-sm-8">
											<textarea id="textareaObsPedido" class="form-control" rows="4"></textarea>
										</div>
									  </div>
									  <div class="form-group">
										<label for="textareaObsNota" class="col-sm-4 control-label">Obs. Nota:</label>
										<div class="col-sm-8">
											<textarea id="textareaObsNota" class="form-control" rows="4"></textarea>
										</div>
									  </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Endereço de entrega:</label>
                                        <div class="col-sm-8">
                                            <div class="well well-sm">
                                                <strong>Av. 136, 761 - 20º andar, Ed. Nasa Business<br>
                                                    St. Sul, Goiânia - GO, 74093-250</strong><br>
                                                <a href="">Este não meu endereço</a>
                                                <button type="button" class="btn btn-default btn-xs">
                                                    <strong>?</strong>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

									</form>
							</div>
						</div>
					</div>
                    <div class="col-md-6">

                    </div>

                    <!-- LAYOUT CARTÃO DE CRÉDITO -->

                    <div class="col-md-6">
                        <div class="row text-center">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="well well-sm">
                                    <center>
                                        <img width="50" height="50" src="img/icon/credit-card-alone.png"><br>
                                        <p><strong>Cartão de crédito</strong></p>
                                        <!-- Quando cartão de crédito ou boleto estiver selecionado, acrescente um disabled="disabled" ao botão e um <strong> ao texto do nome -->
                                        <button type="button" class="btn btn-primary btn-sm btn-block btnProdutoMini" disabled="disabled"><strong>SELECIONAR</strong></button>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="well well-sm">
                                    <center>
                                        <img width="50" height="50" src="img/icon/barcode.png"><br>
                                        <p>Boleto bancário</p>
                                        <button type="button" class="btn btn-primary btn-sm btn-block btnProdutoMini" > <strong>SELECIONAR</strong></button>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <!-- Formulário do cartão de crédito -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputNumeroDoCartao" class="col-sm-4 control-label">Número do cartão:</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputNumeroDoCartao" placeholder="" maxlength="16" max="16" aria-describedby="helpBlock">
                                        <span id="helpBlock" class="help-block"><center><img src="img/bandeirasDeCartoes.png" width="250px" class="img-responsive img-rounded"></center></span>
                                        <span id="helpBlock" class="help-block"><center><img src="img/bandeirasDeCartoesMaster.png" width="250px" class="img-responsive img-rounded"></center></span>
                                        <span id="helpBlock" class="help-block"><center><img src="img/bandeirasDeCartoesVisa.png" width="250px" class="img-responsive img-rounded"></center></span>
                                        <span id="helpBlock" class="help-block"><center><img src="img/bandeirasDeCartoesAmerican.png" width="250px" class="img-responsive img-rounded"></center></span>
                                        <span id="helpBlock" class="help-block"><center><img src="img/bandeirasDeCartoesDinners.png" width="250px" class="img-responsive img-rounded"></center></span>
                                        <span id="helpBlock" class="help-block"><center><img src="img/bandeirasDeCartoesHipercard.png" width="250px" class="img-responsive img-rounded"></center></span>
                                        <span id="helpBlock" class="help-block"><center><img src="img/bandeirasDeCartoesElo.png" width="250px" class="img-responsive img-rounded"></center></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputNomeNoCartao" class="col-sm-4 control-label">Nome no cartão:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNomeNoCartao" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <br>
                                    <label for="inputMesValidade" class="col-sm-4 control-label">Validade:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option>Janeiro</option>
                                            <option>Fevereiro</option>
                                            <option>Março</option>
                                            <option>Abril</option>
                                            <option>Maio</option>
                                            <option>Junho</option>
                                            <option>Julho</option>
                                            <option>Agosto</option>
                                            <option>Setembro</option>
                                            <option>Outubro</option>
                                            <option>Novembro</option>
                                            <option>Dezembro</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                            <option>2024</option>
                                            <option>2025</option>
                                            <option>2026</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <br>
                                    <label for="inputCodigoDeSeguranca" class="col-sm-4 control-label">Código de Segurança:</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputCodigoDeSeguranca" placeholder="" maxlength="3" max="3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <br>
                                    <label for="inputQuantidadeDeParcelas" class="col-sm-4 control-label">Parcelar em:</label>
                                    <div class="col-sm-5">
                                        <select class="form-control">
                                            <option>1 x R$ 1.280,00</option>
                                            <option>2 x R$ 640,00</option>
                                            <option>3 x R$ 426,67</option>
                                            <option>4 x R$ 320,00</option>
                                            <option>5 x R$ 256,00</option>
                                            <option>6 x R$ 213,33</option>
                                            <option>7 x R$ 182,85</option>
                                            <option>8 x R$ 160,00</option>
                                            <option>9 x R$ 142,22</option>
                                            <option>10 x R$ 128,00</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <span id="helpBlock" class="help-block">Informe a quantidade de parcelas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                    <br>
                                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">&nbsp;&nbsp; Lembrar em compras futuras
                            </div>
                        </div>
                        <div class="row text-right">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <br>
                                <button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull"><strong>PAGAR COM CARTAO DE CRÉDITO</strong></button>
                            </div>
                        </div>

                        <br><br><br>
                        <!-- LAYOUT BOLETO -->

                        <div class="row text-center">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="well well-sm">
                                    <center>
                                        <img width="50" height="50" src="img/icon/credit-card-alone.png"><br>
                                        <p>Cartão de crédito</p>
                                        <!-- Quando cartão de crédito ou boleto estiver selecionado, acrescente um disabled="disabled" ao botão e um <strong> ao texto do nome -->
                                        <button type="button" class="btn btn-primary btn-sm btn-block btnProdutoMini"><strong>SELECIONAR</strong></button>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="well well-sm">
                                    <center>
                                        <img width="50" height="50" src="img/icon/barcode.png"><br>
                                        <p><Strong>Boleto bancário</Strong></p>
                                        <button type="button" class="btn btn-primary btn-sm btn-block btnProdutoMini" disabled="disabled"> <strong>SELECIONAR</strong></button>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <!-- Formulário do cartão de crédito -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-warning" role="alert">
                                    <strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;ATENÇÃO!</strong><br>
                                    Só emitimos boletos do Banco do Brasil.<br>
                                    Por favor, confira os dados antes de pagá-lo.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> &nbsp; Imprima o boleto e <strong>pague no banco</strong>.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> &nbsp; Você também pode pagar pela internet <strong> utilizando o código de barras</strong>.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp; O prazo de validade é de até <strong>1 dia útil</strong>.
                                </div>
                            </div>
                        </div>
                        <div class="row text-right">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <br>
                                <button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull"><strong>PAGAR COM BOLETO</strong></button>
                            </div>
                        </div>
                    </div>
				</div>
				<br>
			</div>
        </div>
		<div class="col-md-2"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>