<?php
	$conexao = mysqli_connect("localhost", "root", "", "WD43");
	$dados = mysqli_query($conexao, "select * from produtos where id=$_GET[id]");
	$produto = mysqli_fetch_array($dados);
?>

<?php 
	$cabecalho_title = $produto["nome"];
	$cabecalho_css = '<link rel="stylesheet" href="css/produto.css"';
	include("cabecalho.php");
?>

<div class="produto-back">
	<div class="container">
		<div class="produto">
			<h1><?=$produto["nome"]?></h1>
			<p>por apenas R$ <?=$produto["preco"]?></p>
			<form action="checkout.php" method="POST">
				<input type="hidden" name="id" value="<?=$produto["id"]?>">
				<fieldset class="cores">
					<legend>Escolha a cor:</legend>
			
					<input type="radio" name="cor" value="verde" id="verde" checked>
					<label for="verde">
						<img src="img/produtos/foto<?=$produto["id"]?>-verde.png" alt="verde">
					</label>
			
					<input type="radio" name="cor" value="rosa" id="rosa">
					<label for="rosa">
						<img src="img/produtos/foto<?=$produto["id"]?>-rosa.png" alt="rosa">
					</label>
			
					<input type="radio" name="cor" value="azul" id="azul">
					<label for="azul">
						<img src="img/produtos/foto<?=$produto["id"]?>-azul.png" alt="azul">
					</label>
				</fieldset>
			
				<fieldset>
					<legend>Escolha o tamanho</legend>
					<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
				</fieldset>
		
				<input type="submit" class="comprar" value="comprar">
			</form>
		</div>
	
		<div class="detalhes">
			<h2>Detalhes do produto</h2>
			<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega ajato.</p>
		
			<table>
				<thead>
					<tr>
						<th>Característica</th>
						<th>Detalhes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Cardigã 7845</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Algodão e poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, rosa e verde</td>
					</tr>
					<tr>
						<td>Lavagem</td>
						<td>Lvar a mão</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include("rodape.php");?>

