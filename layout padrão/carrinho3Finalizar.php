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
						<img src="img/carrinho1ItensConcluido.png" height="120" width="168">
					</a>
				</li>
				<li>
					<a href="carrinho2Condicoes.php">
						<img src="img/carrinho2CondicoesConcluido.png" height="120" width="168">
					</a>
				</li>
				<li>
					<a href="carrinho3Finalizar.php">
						<img src="img/carrinho3FinalizarAtivo.png" height="120" width="168">
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
					<div class="col-md-4"></div>
					<div class="col-md-4 text-center">
						<img src="img/carrinhoFinalizado.png" height="120" width="120">
						<h3><strong>Seu pedido foi salvo!</strong></h3>
					</div>
					<div class="col-md-4"></div>
				</div>
				<br>
				<div class="row text-center">
					<div class="col-md-4 text-center">
						<h4><strong>PEDIDO #900</strong></h4>
						<label>24/08/2017</label><br>
						<label>2 ITENS (R$ 31,01)</label><br>
						<label>STATUS:</label> <strong>FINALIZADO</strong><br>
						<label>POSIÇÃO:</label> <strong>BLOQUEADO</strong>
					</div>
					<div class="col-md-8">
						<div id="pedidoBreadcrumbs" class="col-md-8">
							<ul class="list-inline text-center text-nowrap">
							<li>
									<img src="img/status1PedidoEnviadoAtivo.png" height="100" width="140">
							</li>
							<li>
									<img src="img/status2PedidoConfirmado.png" height="100" width="140">
							</li>
							<li>
									<img src="img/status3SaiuParaEntrega.png" height="100" width="69">
							</li>
							</ul>
						</div>
					</div>
				</div>
				<br>
				<div class="row text-center">
					<div class="col-md-2"></div>
					<div class="col-md-4 text-center">
						<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario">
						<img class="text-center" src="img/icon/impressora.png" height="20" width="20">&nbsp;&nbsp;IMPRIMIR</button>
					</div>
					<div class="col-md-4 text-center">
						<button type="button" class="btn btn-primary btn-lg btn-block btnAdicionarALista btnSecundario">
						<img class="text-center" src="img/icon/pdf.png" height="20" width="20">&nbsp;&nbsp;GERAR PDF</button>
					</div>
					<div class="col-md-2"></div>
				</div>
				<br>
				<div class="row text-right">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<button type="button" class="btn btn-primary btn-lg btn-block btnComprar btnProdutoFull"><strong>VISUALIZAR</strong></button>
					</div>
				</div>
			</div>
		<div class="col-md-2"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>