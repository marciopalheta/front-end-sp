<?php 
	$cabecalho_title = "Home MF";
	include("cabecalho.php")
?>
<div class="container destaque">
	<section class="busca">
		<h2>Busca</h2>
		<form action="http://google.com/search" id="form-busca">
			<input type="search" name="q" id="q">
			<input type="image" src="img/busca.png">
		</form>
	</section>
	<section class="menu-departamentos">
		<h2>Departamentos</h2>
		<nav>
			<ul>
				<li>
					<a href="#">Blusas e camisas</a>
					<ul>
						<li><a href="#">Manga curta</a></li>
						<li><a href="#">Manga comprida</a></li>
						<li><a href="#">Camisa social</a></li>
						<li><a href="#">Camisa casual</a></li>
					</ul>
				</li>
				<li><a href="#">Calças</a></li>
				<li><a href="#">Saias</a></li>
				<li><a href="#">Vestidos</a></li>
				<li><a href="#">Sapatos</a></li>
				<li><a href="#">Bolsas e Carteiras</a></li>
				<li><a href="#">Acessórios</a></li>
			</ul>
		</nav>
	</section>
	<img src="img/destaque-home.png" alt="Promoção: Big City Night">
	<a href="#" class="pause"></a>
</div>
<div class="container paineis">
	<section class="painel novidades">
		<h2>Novidades</h2>
		<ol>
			<?php
				$conexao = mysqli_connect("localhost", "root", "", "WD43");
				$dados = mysqli_query($conexao, "select * from produtos order by data desc limit 0,12");
				
				while($produto = mysqli_fetch_array($dados)):
			?>
			<li>
				<a href="produto.php?id=<?= $produto["id"]?>">
					<figure>
						<img src="img/produtos/miniatura<?= $produto["id"]?>.png">
						<figcaption><?= $produto["nome"]?> por <?= $produto["preco"]?></figcaption>
					</figure>
				</a>
			</li>
			<?php endwhile; ?>
		</ol>
		<button type="button">Mostra mais</button>
	</section>

	<section class="painel mais-vendidos">
		<h2>Mais vendidos</h2>
		<ol>
			<?php
				$conexao = mysqli_connect("localhost", "root", "", "WD43");
				$dados = mysqli_query($conexao, "select * from produtos order by vendas desc limit 0,12");
				
				while($produto = mysqli_fetch_array($dados)):?>
			<li>
				<a href="produto.php?id=<?= $produto["id"]?>">
					<figure>
						<img src="img/produtos/miniatura<?= $produto["id"]?>.png">
						<figcaption><?= $produto["nome"]?> por <?= $produto["preco"]?></figcaption>
					</figure>
				</a>
			</li>
			<?php endwhile; ?>			
		</ol>
		<button type="button">Mostra mais</button>
	</section>
</div>
<?php include("rodape.php")?>
<script src="js/jquery.js"></script>
<script src="js/home.js"></script>
