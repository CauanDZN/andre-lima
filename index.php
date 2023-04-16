<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Site de Exemplo Para Query String</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
	</head>
	
    <body>
		<!--COMEÇA O SITE-->
		<div id="geral">
			<!--TOPO-->
			<div id="topo">
				<h1><a href="">Andre Wellington Soares de Lima</a></h1>
				<div id="sessao">
					<ul>        
						<li><a href="">Cadastre-se</a></li>
						<li><a href="">Login</a></li>
					</ul>   
					
				</div>
			</div>
			<!--NAVEGAÇÃO-->
			<div id="nav">
				<ul id="menu">
					<li><a href="home.php">Inicio</a></li>
					<li><a href="quem-somos.php">Quem Somos</a></li>
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="servicos.php">Serviços</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
			<!--CONTEUDO-->
			<div id="conteudo">
				<img src="images/ajax-loader.gif" id="carregando" />
				<?php include("home.php"); ?>
			</div>
			<!--RODAPE-->
			<div id="rodape">
				<address>andreweblima.com.br - Todos os diretos reservados - © 2012</address>
			</div>
		</div>
		
	</body>
</html>
