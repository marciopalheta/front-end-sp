<!DOCTYPE html>
<html>
<head>
	<title><?php print $cabecalho_title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">
	<?php print @$cabecalho_css; ?>
</head>
<body>
	<header class="container">
		<h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
		<div class="sacola">Nenhum item na sacola de compras</div>
		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua conta</a></li>
				<li><a href="#">Lista de Desejos</a></li>
				<li><a href="#">Cartão de fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
	</header>

