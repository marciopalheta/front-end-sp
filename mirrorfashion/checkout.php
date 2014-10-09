<?php
	$conexao = mysqli_connect("localhost", "root", "", "WD43");
	$dados = mysqli_query($conexao, "select * from produtos where id=$_POST[id]");
	$produto = mysqli_fetch_array($dados);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout Mirror Fashion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<h1>Ótima escolha</h1>
	<p>Obrigado por comprar na Mirror Fashion!
		Preencha seus dados para efetivar a compra</p>
	
	<h2>Sua compra</h2>
	<dl>
		<dt>Id</dt>
		<dd><?=$produto["id"]?></dd>
		<dt>Produto</dt>
		<dd><?=$produto["nome"]?></dd>
		<dt>Preço</dt>
		<dd><?=$produto["preco"]?></dd>
		<dt>Cor</dt>
		<dd><?= $_POST["cor"]?></dd>
		<dt>Tamanho</dt>
		<dd><?= $_POST["tamanho"]?></dd>
	</dl>
</body>
</html>
