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
	<div id="divTopo" class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8 text-center"></div>
			<div class="col-md-2 text-center">
					FAZER <strong><a href="login.php">LOGIN</a></strong>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<!--  MENU COM LOGOTIPO, PESQUISA, ÍCONES DE CARRINHO E NOTIFICAÇÃO  -->
	<div id="divMenuLogotipo" class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 text-center">
				<a href="telainicialsemlogar.php"><img id="divImgLogotipo" src="img/logotipo.jpg" alt="" class="img-rounded" width="210" height="75"></a>
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
						<li><a href="#">Fazer login para comprar</a></li>
					  </ul>
					</div>
					<div class="btn-group dropdown" role="group">
				  <button id="btnNotificacoes" class="btn btn-default dropdown-toggle" type="button" id="dropdownNotificacao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<img src="img/icon/notificacao.png" alt="" class="img-rounded" width="15" height="15">
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#">Fazer login para receber notificações</a></li>
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
						<a href="telaInicialSemLogar.php">INÍCIO</a>
					</li>
					<li>
						<a href="telaInicialSemLogar.php" class="current">PRODUTOS</a>
					</li>
				</ul>				
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>