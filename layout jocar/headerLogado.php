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
	</div>
	
	<!--  MENU COM LOGOTIPO, PESQUISA, ÍCONES DE CARRINHO E NOTIFICAÇÃO  -->
	<div id="divMenuLogotipo" class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 text-center">
				<a href="telainiciallogado.php"><img id="divImgLogotipo" src="img/logotipo.jpg" alt="" class="img-rounded" width="195" height="42"></a>
			</div>
			<div class="col-md-6 text-center">
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
							<strong>KIT LÂMPADA DO FAROL - CERTA - H4 - 12V 60/55W</strong><br>
							R$ 250,08 x 5 UN
							</small>
						</li>
						<li>
							<small>
							<strong>KIT LÂMPADA DO FAROL - CERTA - H4 - 12V 60/55W</strong><br>
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

    <!-- Início do formulário de pesquisa -->

    <form id="formPesquisa">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 form-group text-center">
                <select id="selectPesquisa1Marca" name="selectPesquisa1Marca">
                    <option>Selecione a montadora</option>
                    <option value="5">Chevrolet</option>
                    <option value="7">Citroën</option>
                    <option value="12">Fiat</option>
                    <option value="13">Ford</option>
                    <option value="15">Honda</option>
                    <option value="29">Peugeot</option>
                    <option value="32">Renault</option>
                    <option value="37">Toyota</option>
                    <option value="39">Volkswagen</option>
                    <option value="-1">-----------------------------</option>
                    <option value="42">Acura</option>
                    <option value="60">Agrale</option>
                    <option value="1">Alfa Romeo</option>
                    <option value="2">Asia</option>
                    <option value="70">Aston Martin</option>
                    <option value="3">Audi</option>
                    <option value="71">Bentley</option>
                    <option value="4">BMW</option>
                    <option value="59">Bramont</option>
                    <option value="43">Cadillac</option>
                    <option value="41">Chamonix</option>
                    <option value="58">Changan (Chana)</option>
                    <option value="68">Change</option>
                    <option value="66">Chery</option>
                    <option value="5">Chevrolet</option>
                    <option value="6">Chrysler</option>
                    <option value="7">Citroën</option>
                    <option value="52">Cross Lander</option>
                    <option value="8">Daewoo</option>
                </select>

                <select id="selectPesquisa2Veiculo" name="selectPesquisa2Veiculo">
                    <option>Selecione o veículo</option>
                    <option value="49-1980-1989-">A-10</option>
                    <option value="50-1985-1996-">A-20</option>
                    <option value="646-2009-2014-">Agile</option>
                    <option value="51-1995-2011-1996,1997">Astra</option>
                    <option value="52-1995-2011-">Blazer</option>
                    <option value="53-1989-1994-">Bonanza</option>
                    <option value="54-1972-1989-">C-10</option>
                    <option value="55-1985-1996-">C-20</option>
                    <option value="56-1994-1996-">Calibra</option>
                    <option value="374-2009-9999-">Camaro</option>
                    <option value="375-0-0-">Caprice</option>
                    <option value="616-2008-9999-">Captiva</option>
                    <option value="57-1975-1992-">Caravan</option>
                </select>

                <select id="selectPesquisa3Ano" name="selectPesquisa3Ano" >
                    <option>Ano</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1995">1995</option>
                </select>

                <select id="selectPesquisa4Modelo" name="selectPesquisa4Modelo" >
                    <option value="0">Selecione o modelo</option>
                    <option value="5855">Feel 1.6 16V câmbio auto Flex Start 4P</option>
                    <option value="5856">Feel 1.6 16V câmbio manual Flex Start 4P</option>
                    <option value="5857">Live 1.5 8V câmbio manual Flex 4P</option>
                    <option value="5858">Live 1.6 16V câmbio auto Flex Start 4P</option>
                    <option value="5859">Shine 1.6 16V câmbio auto Flex Start 4P</option>
                    <option value="5860">Start 1.5 8V câmbio manual Flex 4P</option>
                    <option value="0">--Não sei--</option>
                </select>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div id="divPesquisa" class="col-md-6 text-center">
                <div class="input-group">
                    <input id="inputPesquisa" type="text" class="form-control" placeholder="Pesquisar...">
                    <span class="input-group-btn">
                        <button id="btnPesquisa" class="btn btn-default" type="button"><img src="img/icon/pesquisa.png" alt="" class="img-rounded" width="15" height="15"></button>
                      </span>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </form>
	
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