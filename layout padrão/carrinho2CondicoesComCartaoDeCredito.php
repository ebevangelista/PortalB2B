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

                    <div class="col-md-6">
                        <div class="row text-center">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="well well-sm">
                                    <center>
                                        <img width="50" height="50" src="img/icon/credit-card-alone.png"><br>
                                        <p><strong>Cartão de crédito</strong></p>
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
                    </div>
				</div>
				<br>
				<div class="row text-right">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<div class="row text-center">
							<div class="col-md-12">
								<h4><label>Qt. Itens:</label> <strong>2</strong></h4>
								<h4><label>Valor total:</label> <strong>1.500,48</strong></h4>
							</div>
						</div>
						<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull"><strong>FINALIZAR</strong></button>
					</div>
				</div>
			</div>
        </div>
		<div class="col-md-2"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>