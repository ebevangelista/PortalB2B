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
					<a class="text-center">Esqueci a senha</a>
					<br>
					<a class="text-center">Já é cliente? Solicite acesso</a>
				</div>
			</div>
			<div class="col-md-4">.</div>
	</div>
	
	<?php include 'footerSemLogar.php'?>