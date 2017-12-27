<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portal Cliente B2B - Máxima Sistemas</title>
	<link rel="icon" href="img/favicon.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<!-- Modal "Esqueci Minha Senha" -->
	<div class="modal fade" id="modalEsqueciMinhaSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Esqueci minha senha</h1>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Por favor, informe seu e-mail cadastrado:</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalSucessoInsercaoCarrinho">ENVIAR CONFIRMAÇÃO</button>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Modal "Solicite acesso" -->
	<div class="modal fade" id="modalSoliciteAcesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Solicite acesso</h1>
		  </div>
		  <div class="modal-body">
			<form>
                <div class="form-group">
                    <label for="inputCPFCNPJ">CPF/CNPJ:</label>
                    <input type="text" class="form-control" id="inputCPFCNPJ" placeholder="CPF/CNPJ">
                </div>
			  <div class="form-group">
				<label for="inputNomeRazaoSocial">Nome Razão Social:</label>
				<input type="text" class="form-control" id="inputNomeRazaoSocial" placeholder="Nome Razão Social">
			  </div>
              <div class="form-group">
				<label for="inputNomeFantasia">Nome Fantasia:</label>
				<input type="text" class="form-control" id="inputNomeFantasia" placeholder="Nome Fantasia">
			  </div>
                <div class="form-group">
                    <label for="inputInscricaoEstadual">Inscrição estadual:</label>
                    <input type="number" class="form-control" id="inputInscricaoEstadual" placeholder="Inscrição estadual">
                </div>
                <div class="form-group">
                    <label for="inputInscricaoMunicipal">Inscrição municipal (opcional):</label>
                    <input type="number" class="form-control" id="inputInscricaoMunicipal" placeholder="Inscrição municipal">
                </div>
                <div class="form-group">
                    <label for="inputEndereco">Endereço (logradouro, número e CEP):</label>
                    <input type="text" class="form-control" id="inputEndereco" placeholder="Endereço">
                </div>
                <div class="form-group">
                    <label for="inputEmail">E-mail:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
                </div>
			  <div class="form-group">
				<label for="inputTelefone">Telefone:</label>
				<input type="tel" class="form-control" id="inputTelefone" placeholder="Telefone">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalSucessoInsercaoCarrinho">ENVIAR SOLICITAÇÃO</button>
		  </div>
		</div>
	  </div>
	</div>

  <!-- Modal Etapa 1 - CNPJ -->
	<div class="modal fade" id="modalCadastroEtapa1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Cadastre-se</h1>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label for="inputNome">CNPJ:</label>
				<input type="text" class="form-control" id="inputNome">
			  </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalSucessoInsercaoCarrinho">PRÓXIMO</button>
              </div>
            </form>
            </div>
          </div>
	    </div>
    </div>

    <!-- Modal Etapa 2 - CONFIRMAÇÃO -->
	<div class="modal fade" id="modalCadastroEtapa2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title" id="myModalLabel">Cadastre-se</h1>
		  </div>
		  <div class="modal-body">
			<form>
                Estes são seus dados?
                &nbsp;<br><br>
                <div class="row">
                    <div class="col-md-4 text-right">
                        CNPJ:
                    </div>
                    <div class="col-md-8 text-left">
                        <strong>10.766.206/0002-61</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 text-right">
                        Nome fantasia:
                    </div>
                    <div class="col-md-8 text-left">
                        <strong>MAXIMA SISTEMAS</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 text-right">
                        Razão social:
                    </div>
                    <div class="col-md-8 text-left">
                        <strong>MAXIMA SISTEMAS DE INFORMATICA S.A.</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 text-right">
                        Endereço:
                    </div>
                    <div class="col-md-8 text-left">
                        <strong>AV 136 761, SETOR SUL, GOIANIA, GO - CEP 74093250</strong>
                    </div>
                </div>
                <br>
              <div class="modal-footer">
                  <a href="carrinho1Itens.php" type="button" class="btn btn-default btnSecundario">VOLTAR</a>
                  <button type="submit" class="btn btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalSucessoInsercaoCarrinho">PRÓXIMO</button>
              </div>
            </form>
            </div>
          </div>
	    </div>
    </div>

    <!-- Modal Etapa 3 - CADASTRO -->
    <div class="modal fade" id="modalCadastroEtapa3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="myModalLabel">Cadastre-se</h1>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputCNPJ">CNPJ:</label>
                                    <input type="text" class="form-control" id="inputCNPJ" placeholder="CNPJ">
                                </div>
                                <div class="form-group">
                                    <label for="inputNomeRazaoSocial">Nome Razão Social:</label>
                                    <input type="text" class="form-control" id="inputNomeRazaoSocial" placeholder="Nome Razão Social">
                                </div>
                                <div class="form-group">
                                    <label for="inputNomeFantasia">Nome Fantasia:</label>
                                    <input type="text" class="form-control" id="inputNomeFantasia" placeholder="Nome Fantasia">
                                </div>
                                <div class="form-group">
                                    <label for="inputInscricaoEstadual">Inscrição estadual:</label>
                                    <input type="text" class="form-control" id="inputInscricaoEstadual" placeholder="Inscrição estadual">
                                </div>
                                <div class="form-group">
                                    <label for="inputInscricaoMunicipal">Inscrição municipal:</label>
                                    <input type="text" class="form-control" id="inputInscricaoMunicipal" placeholder="Inscrição municipal">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputRG">RG:</label>
                                            <input type="text" class="form-control" id="inputRG" placeholder="RG">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputOrgaoEmissor">Órgão emissor:</label>
                                            <input type="text" class="form-control" id="inputOrgaoEmissor" placeholder="Órgão emissor">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputRamoDeAtividade">Ramo de atividade:</label>
                                    <select id="inputRamoDeAtividade" class="form-control">
                                        <option value="1">Padaria</strong></option>
                                        <option value="2">Supermercado</strong></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputEndereco">Endereço:</label>
                                    <input type="text" class="form-control" id="inputEndereco" placeholder="Endereço">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputNumero">Número:</label>
                                            <input type="number" class="form-control" id="inputNumero" placeholder="Número">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputComplemento">Complemento:</label>
                                            <input type="text" class="form-control" id="inputComplemento" placeholder="Complemento">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputBairro">Bairro:</label>
                                            <input type="text" class="form-control" id="inputBairro" placeholder="Bairro">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputMunicipio">Município:</label>
                                            <input type="text" class="form-control" id="inputMunicipio" placeholder="Município">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputEstado">Estado:</label>
                                            <input type="text" class="form-control" id="inputEstado" placeholder="Estado">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputCep">CEP:</label>
                                            <input type="text" class="form-control" id="inputCep" placeholder="CEP">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputPais">País:</label>
                                            <input type="text" class="form-control" id="inputPais" placeholder="País">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPontoDeReferencia">Ponto de referência:</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputPontoDeReferencia" placeholder="Ponto de referência">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTelefone">Telefone:</label>
                                    <input type="tel" class="form-control" id="inputTelefone" placeholder="Telefone">
                                </div>
                                <div class="form-group">
                                    <label for="inputPraca">Praça:</label>
                                    <select id="inputPraca" class="form-control">
                                        <option value="1">Marista</strong></option>
                                        <option value="2">Bueno</strong></option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <label for="inputPedrioProprio">Prédio próprio?&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputPedrioProprio1" value="S"> Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputPedrioProprio2" value="N"> Não
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputObservacoesGerais" class="col-sm-12 control-label">Observações gerais:</label>
                                    <div class="col-sm-12">
                                        <textarea id="inputObservacoesGerais" class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTelefoneAdicional">Telefone adicional:</label>
                                    <input type="tel" class="form-control" id="inputTelefoneAdicional" placeholder="Telefone adicional">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmailPrincipal">E-mail principal:</label>
                                    <input type="email" class="form-control" id="inputEmailPrincipal" placeholder="E-mail principal">
                                </div>
                                <div class="form-group">
                                    <label for="textareaObservacoesDeEntrega" class="col-sm-12 control-label">Observações de entrega:</label>
                                    <div class="col-sm-12">
                                        <textarea id="textareaObservacoesDeEntrega" class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputQtdeCheckout">Qtde. checkout:</label>
                                    <input type="number" class="form-control" id="inputQtdeCheckout" placeholder="Qtde. checkout">
                                </div>
                                <div class="form-group">
                                    <label for="inputSite">Site:</label>
                                    <input type="email" class="form-control" id="inputSite" placeholder="Site">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmailNfe">E-mail NFE:</label>
                                    <input type="email" class="form-control" id="inputEmailNfe" placeholder="E-mail NFE">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <label for="inputConsumidorFinal">Consumidor final?&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputConsumidorFinal1" value="option1"> Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputConsumidorFinal2" value="option2"> Não
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <label for="inputContribuinte">Contribuinte?&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputContribuinte1" value="option1"> Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputContribuinte2" value="option2"> Não
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <label for="inputSimplesNacional">Simples nacional?&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputSimplesNacional1" value="option1"> Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inputSimplesNacional2" value="option2"> Não
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="carrinho1Itens.php" type="button" class="btn btn-default btnSecundario">VOLTAR</a>
                    <button type="submit" class="btn btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalSucessoInsercaoCarrinho">ENVIAR</button>
                </div>
            </div>
        </div>
    </div>

	<div class="container-fluid">


	<!--  Container principal  -->
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
				<div id="divLogin" class="wrapper">
					<form class="form-signin">
                        <center>
					  <img src="img/logotipo.png" alt="" class="img-rounded img-responsive" width="180" height="167">
                        </center>
					  <br>
					  <br>
					  <br>
					  <div class="dropdown text-center">
						  <select class="form-control">
												<option>FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong></option>
												<option>FILIAL 2 - <strong>DISTRIBUIDORA LOPES MS</strong></option>
											</select>
						</div>
						<br>
					  <input type="text" class="form-control text-center" name="email" placeholder="E-mail" required="" /><br>
					  <input type="password" class="form-control text-center" name="senha" placeholder="Senha" required="" />
					  <label class="checkbox">
						<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">Lembrar-me
					  </label>
					  <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
					</form>

					<br>
					<a class="text-center" data-toggle="modal" data-target="#modalEsqueciMinhaSenha">Esqueci a senha</a>
					<br>
					<a class="text-center" data-toggle="modal" data-target="#modalSoliciteAcesso">Já é cliente? Solicite acesso</a>
                    <br>
					<a class="text-center" data-toggle="modal" data-target="#modalCadastroEtapa1">Cadastro Etapa 1 - CNPJ</a>
                    <br>
					<a class="text-center" data-toggle="modal" data-target="#modalCadastroEtapa2">Cadastro Etapa 2 - CONFIRMAÇÃO</a>
                    <br>
					<a class="text-center" data-toggle="modal" data-target="#modalCadastroEtapa3">Cadastro Etapa 3 - CNPJ</a>

				</div>
			</div>
			<div class="col-md-4">.</div>
	</div>

	<?php include 'footerSemLogar.php'?>