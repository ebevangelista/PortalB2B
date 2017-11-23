<?php include 'headerLogado.php' ?>

	<!-- Modal modalBoletoNaoAtualizado -->
	<div class="modal fade" id="modalBoletoNaoAtualizado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Atenção!</h1>
		  </div>
		  <div class="modal-body">
			Não é possível gerar o boleto, ele já foi atualizado uma vez.<br>
			Por favor, procure o departamento financeiro.
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default btnSecundario" data-dismiss="modal">FECHAR</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Modal modalBoletoAtualizado -->
	<div class="modal fade" id="modalBoletoAtualizado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Tudo certo!</h1>
		  </div>
		  <div class="modal-body">
			Boleto atualizado com sucesso.
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default btnSecundario" data-dismiss="modal">FECHAR</button>
			<button type="button" class="btn btn-primary btnProdutoFull">VISUALIZAR</button>
		  </div>
		</div>
	  </div>
	</div>
			
	<div id="divBreadcrumbs" class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><a href="telaInicialLogado.php">Início</a> > <strong>Títulos</strong></div>
		<div class="col-md-7 text-center"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4"><h1>Títulos</h1></div>
		<div class="col-md-7 text-center"></div>
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<form class="form-inline text-center">
				<input type="number" class="form-control" id="exampleInputName2" placeholder="Duplicata">
				<input type="date" class="form-control" id="exampleInputEmail2" placeholder="Vencimento">
			    <button type="submit" class="btn btn-primary btnComprar btnProdutoFull">
						<img class="text-center" src="img/icon/pesquisaBranca.png" height="15" width="15">&nbsp;&nbsp;PESQUISAR</button>
			</form>
			<br>
			<table class="table text-center table-hover">
				<thead >
					<tr>
						<th class="text-center">DUPLICATA</th>
						<th class="text-center">VENCIMENTO</th>
						<th class="text-center">VALOR</th>
						<th class="text-center">GERAR / ATUALIZAR BOLETO</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
					<tr>
						<td><strong>140896</strong></td>					
						<td>17/08/2017</td>					
						<td>R$ 34,98</td>					
						<td>
							<a  type="button" class="btn  btn-default btn-xs " data-toggle="modal" data-target="#modalBoletoNaoAtualizado">
								<center>
									<img src="img/icon/pdf.png" width="20" height="20">
								</center>
							</a>
							
							<a  type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#modalBoletoAtualizado">
								<center>
									<img src="img/icon/atualizar.png" width="20" height="20">
								</center>
							</a>
							
						</td>					
					</tr>
				</tbody>
			</table>
			
		</div>
		<div class="col-md-2"></div>
	</div>
	<br>
<?php include 'footerLogado.php'?>