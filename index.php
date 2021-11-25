<?php
session_start();

if(isset($_SESSION['login'])){
header('Location: painel.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Art Anime</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pacifico|Roboto+Slab:400,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/eu.png"/>
	<script src="https://kit.fontawesome.com/ebc434d6f0.js" crossorigin="anonymous"></script>
	<style type="text/css">
		h1,h2,h3{
			font-family: "Roboto Slab", Helvetica, Arial, sans-serif;
			font-weight: 700;
		}
	</style>
</head>

<body>
	<div class="container">
	<header class="cabecalho">		
		<nav id="menu">
		<a href="index.php"><img src="img/artanime.png" id="logo"></a>
			<ul>
				<li><input type="search" name="pesquisa" placeholder=" Pesquisar" id="caixaPesq"></li>
				<li></li>
				<li><a href="pages/fotos.html">Galeria</a></li>
				<li><a href="index.php#imagens">Top 6 da semana</a></li>
				<li><a href="index.php#contato">Contato</a></li>
				<li><a href="pages/sobre.html">Sobre</a></li>
			</ul>
		</nav>
	</header>

	<form class="banner" method="POST" action="pages/login.php">
		<h1>Art Anime</h1>
		<?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
                <strong>Erro</strong>: Usuário ou senha inválidos!
            </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>  
		<input type="email" name="login" placeholder="E-mail:">
		<input type="password" name="senha" placeholder="Senha:">
		<button type="submit" id="btnAvc">Avançar</button>
	</form>
	
	<section class="cadastro">
		<h3>Criar uma nova conta</h3>
		<p>Rápido e fácil.</p>
		<a href="pages/form.php"><button class="btn-cadastrar">Cadastrar</i></button></a>
		<a href="#"><img src=""><i class="fab fa-facebook">Entre com o Facebook</i></a>
	</section>

	<section id="imagens">
		<h2>Top 6 da semana</h2>
		<img src="img/1.jpg" alt="Texto alternativo 1">
		<img src="img/2.jpg" alt="Texto alternativo 2">
		<img src="img/3.jpg" alt="Texto alternativo 3">
		<img src="img/4.jpg" alt="Texto alternativo 4">
		<img src="img/5.jpg" alt="Texto alternativo 5">
		<img src="img/6.jpg" alt="Texto alternativo 6">
	</section>

	<section id="contato">
		<h2>Contato</h2>
		<p>Entre em contato conosco</p>
		<div>
			<a href="tel:Ricardo">Ricardo<img src="img/fone.png"></a>
			<p><a href="tel:98280-1958">(51) 98280-1958</a></p>
			
		</div>
			<div>
			<a href="tel:Bruno">Bruno<img src="img/fone.png"></a>
			<p><a href="tel:98682-2139">(51) 98682-2139</a></p>
			</div>
		<div>
			
		</div>
	</section>

	<footer class="rodape">
	<p>Copyright&copy; 2021 - by Ricardo e Bruno</p>
		<a href="faces " target="_blank">Facebook Ricardo</a>|
		<a href="faces " target="_blank">Facebook bruno</a>|
	</footer>
	</div>
</body>

</html>