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
	
	<!-- Slider -->
	<link rel="stylesheet" href="slider/css/swiper.min.css">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!--  Div de topo  -->
	<div id="divTopo" class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3 text-center">LIMITE DE CRÉDITO: <strong>R$ 3.000,00</strong></div>
			<div class="col-md-3 text-center">LIMITE DISPONÍVEL: <strong>R$ 1.538,97</strong></div>
			<div class="col-md-2"></div>
			<div class="col-md-2 text-center">
				<div class="dropdown">
				  <a id="btnMenuLogin" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					OLÁ, <strong>MARCELO!</strong>
					<span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#">Meus pedidos</a></li>
					<li><a href="fichaFinanceira.php">Fiha financeira</a></li>
					<li><a href="titulos.php">Títulos</a></li>
					<li><a href="notasFiscais.php">Notas fiscais</a></li>
					<li><a href="alterarSenha.php">Alterar senha</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="login.php">Sair</a></li>
				  </ul>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<!--  MENU COM LOGOTIPO, PESQUISA, ÍCONES DE CARRINHO E NOTIFICAÇÃO  -->
	<div id="divMenuLogotipo" class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 text-center">
				<img id="divImgLogotipo" src="img/logotipo.jpg" alt="" class="img-rounded" width="210" height="75">
			</div>
			<div id="divPesquisa" class="col-md-6 text-center">
				<div class="input-group">
				  <input id="inputPesquisa" type="text" class="form-control" placeholder="Pesquisar...">
				  <span class="input-group-btn">
					<button id="btnPesquisa" class="btn btn-default" type="button"><img src="img/icon/pesquisa.png" alt="" class="img-rounded" width="15" height="15"></button>
				  </span>
				 </div>
			</div>

			<div class="col-md-2 text-center form-inline">
				
				<div class="btn-group" role="group" aria-label="...">
					<div class="btn-group dropdown" role="group">
					  <button id="btnCarrinho" class="btn btn-default dropdown-toggle" type="button" id="dropdownCarrinho" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<img src="img/icon/carrinho.png" alt="" class="img-rounded" width="15" height="15">
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#">Não há itens no carrinho</a></li>
					  </ul>
					</div>
					<div class="btn-group dropdown" role="group">
				  <button id="btnNotificacoes" class="btn btn-default dropdown-toggle" type="button" id="dropdownNotificacao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<img src="img/icon/notificacao.png" alt="" class="img-rounded" width="15" height="15">
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#">Não há novas notificações</a></li>
				  </ul>
				</div>
				</div>
				
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<div id="divMenuPrincipal" class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
				  <div class="btn-group" role="group">
					<a href="telaInicialLogado.php" type="button" class="btn btn-default">INÍCIO</a>
				  </div>
				  <div class="btn-group" role="group">
					<a type="button" class="btn btn-default current">PRODUTOS</a>
				  </div>
				  <div class="btn-group" role="group">
					<a type="button" class="btn btn-default">MEUS PEDIDOS</a>
				  </div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>