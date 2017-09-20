<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
	<!--  MENU SOCKET TOPO DE LIMITE DE CRÉDITO E LOGIN  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3 text-center">LIMITE DE CRÉDITO: <strong>R$ 3.000,00</strong></div>
			<div class="col-md-3 text-center">LIMITE DISPONÍVEL: <strong>R$ 1.538,97</strong></div>
			<div class="col-md-2"></strong></div>
			<div class="col-md-2 text-center">
				<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					OLÁ, <strong>MARCELO!</strong>
					<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#">Mus pedidos</a></li>
					<li><a href="#">Fiha financeira</a></li>
					<li><a href="#">Títulos</a></li>
					<li><a href="#">Notas fiscais</a></li>
					<li><a href="#">Alterar senha</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Sair</a></li>
				  </ul>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<!--  MENU COM LOGOTIPO, PESQUISA, ÍCONES DE CARRINHO E NOTIFICAÇÃO  -->
	<div id="menuLogotipo" class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 text-center"><img src="img/logotipo.jpg" alt="" class="img-rounded" width="210" height="75"></div>
			<div id="divPesquisa" class="col-md-6 text-center">
				<form class="form-inline">
				  <div class="form-group">
					<label for="inputPesquisa" class="sr-only">Pesquisa</label>
					<input type="search" class="form-control" id="inputPesquisa" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-default"><img src="img/icon/pesquisa.png" alt="" class="img-rounded" width="15" height="15"></button>
				</form>
			</div>
			<div class="col-md-2 text-center form-inline">
				<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownCarrinho" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<img src="img/icon/carrinho.png" alt="" class="img-rounded" width="15" height="15">
					<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#">Meus pedidos</a></li>
				  </ul>
				</div>
				<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownNotificacao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<img src="img/icon/notificacao.png" alt="" class="img-rounded" width="15" height="15">
					<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#">Notificações</a></li>
				  </ul>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<!--  CONTAINER PRINCIPAL COM SIDEBAR E CONTEÚDO  -->
	<div class="row">
			<div class="col-md-1">.</div>
			<div class="col-md-2">
				<h2>DEPARTAMENTOS</h2>
				<ul class="nav navbar-nav lateral-menu">
					<li class="active"><a href="#">ABRASIVOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ACESSÓRIOS PARA BANHEIRO<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ADESIVOSOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">AGROPECUÁRIA E PET SHOP<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ELÉTRICA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">EPI-SEGURANÇA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAGENS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAMENTAS ELÉTRICAS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ABRASIVOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ACESSÓRIOS PARA BANHEIRO<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ADESIVOSOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">AGROPECUÁRIA E PET SHOP<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ELÉTRICA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">EPI-SEGURANÇA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAGENS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAMENTAS ELÉTRICAS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li><li class="active"><a href="#">ABRASIVOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ACESSÓRIOS PARA BANHEIRO<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ADESIVOSOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">AGROPECUÁRIA E PET SHOP<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ELÉTRICA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">EPI-SEGURANÇA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAGENS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAMENTAS ELÉTRICAS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>       <li class="active"><a href="#">ABRASIVOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ACESSÓRIOS PARA BANHEIRO<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ADESIVOSOS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">AGROPECUÁRIA E PET SHOP<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">ELÉTRICA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">EPI-SEGURANÇA<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAGENS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
					<li class="active"><a href="#">FERRAMENTAS ELÉTRICAS<img class="text-right" src="img/icon/seta-direita.png" width="15" height="15"></a></li>
				  </ul>
			</div>
			<div class="col-md-8">
				<h2>Produtos</h2>
				<form class="form-inline">
					<div class="dropdown">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong>
						<span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#">FILIAL 1 - <strong>DISTRIBUIDORA LOPES MT</strong></a></li>
						<li><a href="#">FILIAL 2 - <strong>DISTRIBUIDORA LOPES MS</strong></a></li>
					  </ul>
					</div>
					&nbsp;&nbsp;
					<div class="dropdown">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
					<div class="dropdown">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
					<a class="btn btn-default btn-sm" href="#" id="navbarDropdownCarrinho" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <img class="text-center" src="img/icon/seta-sentido.png" height="20" width="20">
					</a>
					&nbsp;&nbsp;
					<a class="btn btn-default btn-sm" href="#" id="navbarDropdownCarrinho" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <img class="text-center" src="img/icon/lista.png" height="20" width="20">&nbsp;&nbsp;LISTA
					</a>
				</form>
			</div>
			<div class="col-md-1">.</div>
	</div>
	
	<!-- RODAPÉ -->
	<div id="rodape" class="row">
		<div class="col-md-1">	
		</div>
		<div class="col-md-2">
			<h1>ACESSO RÁPIDO</h1>
			<ul class="nav navbar-nav text-left">
				<li class="active"><a href="#">Início</a></li>
				<li class="active"><a href="#">Produtos</a></li>
				<li class="active"><a href="#">Quem somos</a></li>
				<li class="active"><a href="#">Fale conosco</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h1>ONDE ESTAMOS</h1>
			<strong class="text-center">Mato Grosso do Sul</strong><br>
			Av. João Batista Fernandes, 1415<br>
			Polo Empresarial Oeste<br>
			Campo Grande - MS<br>
			Fone: (67) 3378-2000<br>
			Fax: (67) 3378-2001<br>
		</div>
		<div class="col-md-3">
			<h1>&nbsp;</h1>
			<strong class="text-center">Mato Grosso</strong><br>
			R. Ipê Amarelo, QD 06 - LT 0<br>
			Bairro Novo Mundo<br>
			Várzea Grande - MT<br>
			Fone: (65) 3688-3900<br>
			Fax: (65) 3688-3900<br>
		</div>
		<div class="col-md-2">
			<h1>Fale conosco</h1>
			<span>
			De segunda à sexta<br>
			Das 08h às 18h<br>
			<h3>(11) 4935-2344</h3><br>
			compras@distlopes.com.br<br>
			</span>
		</div>	
		<div class="col-md-1"></div>
	</div>
		
	<!-- SOCKET DO RODAPÉ -->
	<div class="row">
		<div class="col-md-12 text-center">
		<img src="img/maxima.png" width="25" height="21">&nbsp;&nbsp;&nbsp;Máxima Sistemas, Versão 4.8.2.3 , Copyright © 2008-2017 Todos os direitos reservados.
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>