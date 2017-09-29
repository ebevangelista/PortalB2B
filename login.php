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
				<label for="inputNome">Nome completo:</label>
				<input type="text" class="form-control" id="inputNome" placeholder="Nome">
			  </div>
			  <div class="form-group">
				<label for="tipoPessoa">Tipo de pessoa:</label>
				<select id="tipoPessoa" class="form-control">
				  <option>Pessoa física</option>
				  <option>Pessoa jurídica</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="inputCPFCNPJ">Informe seu CPF/CNPJ:</label>
				<input type="text" class="form-control" id="inputCPFCNPJ" placeholder="CPF/CNPJ">
			  </div>
			  <div class="form-group">
				<label for="inputTelefone">Telefone para contato:</label>
				<input type="tel" class="form-control" id="inputTelefone" placeholder="Telefone">
			  </div>
			  <div class="form-group">
				<label for="inputEmail">E-mail válido:</label>
				<input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary btnProdutoFull" data-toggle="modal" data-target="#modalSucessoInsercaoCarrinho">ENVIAR SOLICITAÇÃO</button>
		  </div>
		</div>
	  </div>
	</div>
  
	<div class="container-fluid">
		
	
	<!--  Container principal  -->
	<div class="row">
			<div class="col-md-4">.</div>
			<div class="col-md-4 text-center">
				<div id="divLogin" class="wrapper">
					<form class="form-signin">       
					  <img src="img/logotipo.jpg" alt="" class="img-rounded" width="270" height="97">
					  <br>
					  <br>
					  <br>
					  <div class="dropdown text-center">
						  <button class="btn btn-default dropdown-toggle btn-block btnFiltro text-center" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong>
							<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenu1">
							<li><a href="#">FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong></a></li>
							<li><a href="#">FILIAL 2 - <strong>DISTRIBUIDORA LOPES MS</strong></a></li>
						  </ul>
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
				</div>
			</div>
			<div class="col-md-4">.</div>
	</div>
	
	<?php include 'footerSemLogar.php'?>