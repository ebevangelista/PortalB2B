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
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!--  Div de topo  -->
	<header id="divTopo" class="container-fluid">
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
					<li><a href="meuspedidos.php">Meus pedidos</a></li>
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
	</header>
	
	<!--  MENU COM LOGOTIPO, PESQUISA, ÍCONES DE CARRINHO E NOTIFICAÇÃO  -->
	<div id="divMenuLogotipo" class="container-fluid navbar-static-top">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 text-center">
				<a href="telainiciallogado.php"><img id="divImgLogotipo" src="img/logotipo.jpg" alt="" class="img-rounded" width="210" height="75"></a>
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
				<div class="btn-group" role="group">
					<div id="dropdownCarrinho" class="btn-group dropdown" role="group">
					  <button id="btnCarrinho" class="btn btn-default dropdown-toggle" type="button" id="dropdownCarrinho" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<strong>R$ 1.500,48</strong>&nbsp;&nbsp;
						<img src="img/icon/carrinho.png" alt="" class="img-rounded" width="15" height="15">
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li>
							<small>
							<strong>3 EM 1 FOSCO 18L BRANCO</strong><br>
							R$ 250,08 x 5 UN
							</small>
						</li>
						<li>
							<small>
							<strong>3 EM 1 FOSCO 18L BRANCO</strong><br>
							R$ 250,08 x 5 UN
							</small>
						</li>
						<li class="text-center">
							<br>
							Total: <strong>R$ 1.500,48</strong><br><br>
							<button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnProdutoFull">FINALIZAR COMPRA</button>
						</li>
					  </ul>
					</div>
				<div id="dropdownNotificacoes" class="btn-group dropdown" role="group">
					
				  <button id="btnNotificacoes" class="btn btn-default dropdown-toggle" type="button" id="dropdownNotificacao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<img src="img/icon/notificacao.png" alt="" class="img-rounded" width="15" height="15">
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li>
						<small>
						<strong>CHEGARAM NOVAS PROMOÇÕES!</strong><br>
						</small>
					</li>
					<li>
						<small>
						<strong>Venha conferir ;)</strong><br>
						</small>
					</li>
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
				<ul class="nav nav-pills nav-justified">
					<li>
						<a href="telaInicialLogadoGrid.php">INÍCIO</a>
					</li>
					<li>
						<a href="telaInicialLogadoGrid.php" class="current">PRODUTOS</a>
					</li>
					<li>
						<a href="meusPedidos.php">MEUS PEDIDOS</a>
					</li>
				</ul>				
			</div>
			<div class="col-md-2"></div>
		</div>
		
	</div>