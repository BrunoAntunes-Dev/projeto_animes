<?php
include('pages/verifica_login.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Art Anime</title>
	<link rel="stylesheet" type="text/css" href="css/estiloPainel.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pacifico|Roboto+Slab:400,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/eu.png"/>
	<script src="https://kit.fontawesome.com/ebc434d6f0.js" crossorigin="anonymous"></script>
	<style type="text/css">
		h2,h3{
			font-family: "Roboto Slab", Helvetica, Arial, sans-serif;
			font-weight: 700;
		}
	</style>
</head>

<body>
<div class="container">
	<header class="cabecalho">		
		<nav id="menu">
		<a href="pages/iniciar.php"><img src="img/artanime.png" id="logo"></a>
			<ul>
				<li><input type="search" name="pesquisa" placeholder=" Pesquisar" id="caixaPesq"></li>
				<li></li>
				<li><a href="pages/fotos.html">Galeria</a></li>
				<li><a href="index.php#imagens">Top 6 da semana</a></li>
				<li><a href="index.php#contato">Contato</a></li>
				<li><a href="#">Account</a></li>
				<li><a href="pages/logout.php">Exit</a></li>
			</ul>
		</nav>
	</header>

	<section id="sobre">
		<h2>Bem vindo de volta, <?php echo $_SESSION['nome']; ?>.</h2>
		<h4>Criar publicação</h4>
		<hr>
		<div id="teste"><img src="img/iconeConta.png" id="esseesq"><input type="text" name="public" placeholder=" Fez algo que curtiu? Compartilhe conosco." id="essedir"></div>
		<hr>
		<div id="btnsP">
			<div class="btnPesc"><!-- <i class="fas fa-photo-video"></i> --><button id="b1">Foto/vídeo</button></div> &nbsp;
			<div class="btnPesc"><!-- <i class="far fa-flag"></i> --><button id="b2">Marcar amigos</button></div>
		</div>
	</section>

	<footer class="rodape">
		<p>Copyright&copy; 2021 - by Ricardo e Bruno</p>
		<a href="faces " target="_blank">Facebook Ricardo</a>|
		<a href="faces " target="_blank">Facebook bruno</a>|>
	</footer>
	</div>
</body>

</html>