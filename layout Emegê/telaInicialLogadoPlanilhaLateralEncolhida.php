<?php include 'headerLogado.php' ?>
<?php include 'slider.php'?>
<div class="row">
			<div class="col-md-1"></div>
			<div id="divConteudo" class="col-md-10">
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
				
				<br><br>
				
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class="text-center">Cód.</th>
								<th class="text-center">Nome</th>
								<th class="text-center">Embalagem</th>
								<th class="text-center">Qt. Disp.</th>
								<th class="text-center">Preço</th>
								<th class="text-center">Quantidade</th>
								<th class="text-center">Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr class="active">
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[1]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[1]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[1]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr class="success">
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[2]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[2]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[2]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr class="warning">
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[3]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[3]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[3]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr class="danger">
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[4]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[4]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[4]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr class="info">
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[5]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[5]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[5]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[6]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[6]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[6]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[7]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[7]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[7]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[8]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[8]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[8]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[9]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[9]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[9]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[10]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[10]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[10]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[11]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[11]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[11]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[12]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[12]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[12]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[13]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[13]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[13]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[14]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[14]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[14]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[15]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[15]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[15]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[16]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[16]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[16]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[17]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[17]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[17]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[18]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[18]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[18]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[19]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[19]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[19]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[20]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[20]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[20]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[21]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[21]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[21]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[22]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[22]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[22]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[23]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[23]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[23]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[24]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[24]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[24]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[25]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[25]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[25]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[26]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[26]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[26]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[27]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[27]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[27]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[28]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[28]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[28]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[29]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[29]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[29]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							<tr>
								<th scope="row" class="text-center">324</th>
								<td>FARINHA DE TRIGO EMEGÊ</td>
								<td class="text-center">CAIXA 12 UN</td>
								<td class="text-center">09</td>
								<td class="text-center">R$ 250,00</td>
								<td class="text-center">
									<div class="btn-group divGroupQuantidadeMini" role="group">
										<button type="button" class="btn btn-default btn-number btn-xs btnMenosMini" data-type="minus" data-field="quant[30]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
										<input type="text" name="quant[30]" class="btn btn-default inputQuantidadeCompraMini" value="1" min="1" max="10">
										  
										<button type="button" class="btn btn-default btn-number btn-xs btnMaisMini" data-type="plus" data-field="quant[30]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</div>
								</td>
								<td class="text-center">
									<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/adicionarALista.png" height="20" width="20">
										</center>
									</a>
									<a  type="button" class="btn  btn-default btn-xs btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
										<center>
											<img src="img/icon/carrinhoBotaoCompra.png" height="20" width="20">
										</center>
									</a>
								</td>
							</tr>
							
							
						</tbody>
					</table>
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