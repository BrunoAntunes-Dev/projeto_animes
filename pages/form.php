<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Art Anime</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pacifico|Roboto+Slab:400,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../img/eu.png"/>
	<script src="https://kit.fontawesome.com/ebc434d6f0.js" crossorigin="anonymous"></script>
	<style type="text/css">
		h2{
			font-family: "Roboto Slab", Helvetica, Arial, sans-serif;
			font-weight: 700;
		}
	</style>
</head>

<body>
	<div class="container">
	<header class="cabecalho">
		<nav id="menu">
			<a href="../index.php"><img src="../img/artanime.png" id="logo"></a>
			<ul>
				<li><a href="page/fotos.html">Galeria</a></li>
				<li><a href="../index.php#imagens">Top 6 da semana</a></li>
				<li><a href="../index.php#contato">Contato</a></li>
				<li><a href="sobre.html">Sobre</a></li>
			</ul>
		</nav>
	</header>

	<section id="formulario">
		<h2>Formulário de Cadastro</h2>
		<form method="POST" action="proc_cadastrar_usuario.php">
		<fieldset id="usuario">
			<legend>Informações do Usuário</legend>
			<p><label for="lblNome">Nome: </label><input type="text" name="txtNome" id="lblNome" size="35" maxlength="40" placeholder="Ex. João da Silva Soares"></p>
			<p><label for="lblSenha">Senha: </label><input type="password" name="txtSenha" id="lblSenha" size="35" maxlength="30" placeholder="Mínimo de 8 Digitos"></p>
			<p><label for="lblMail">E-mail:</label><input type="email" name="txtMail" id="lblMail" size="35" maxlength="40" placeholder="Ex. example@email.com"></p>
			<fieldset id="sexo">
				<legend>Sexo:</legend>
				<input type="radio" name="tSexo" id="Masc" checked><label for="Masc">Masculino</label><br>
				<input type="radio" name="tSexo" id="Fem"><label for="Fem">Feminino</label>					
			</fieldset>
			<p><label for="nasc">Data de Nascimento: </label><input type="date" name="cdata" id="nasc"></p>
		</fieldset>

		<fieldset id="endereco">
			<legend>Endereço do usuário</legend>
			<p><label for="lblRua">Rua: </label><input type="text" name="txtRua" id="lblRua" size="40" maxlength="30" placeholder="Rua,Avenida,Travessa..."></p>
			<p><label for="lblNum">Número: </label><input type="text" name="txtNum" id="lblNum" size="5" maxlength="10"><label for="lblEst"> Estado: </label>
				<select id="slEst">
				<option>selecione o estado</option>
				<optgroup label="Região Sul">
					<option>Rio Grande de Sul</option>
					<option>Santa Catarina</option>
					<option>Paraná</option>
				</optgroup>
				<optgroup label="Sudeste">
                    <option value="SP">São Paulo</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="ES">Espirito Santo</option>
                </optgroup>
                <optgroup label="Centro-Oeste">
                    <option value="GO">Goiás</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                </optgroup>
                <optgroup label="Nordeste">
                    <option value="MA">Maranhão</option>
                    <option value="PI">Piauí</option>
                    <option value="CE">Ceará</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PB">Paraíba</option>
                    <option value="SE">Sergipe</option>
                    <option value="AL">Alagoas</option>
                    <option value="BA">Bahia</option>
                </optgroup>
                <optgroup label="Norte">
                    <option value="AM">Amazonas</option>
                    <option value="RR">Roraima</option>
                    <option value="AP">Amapá</option>
                    <option value="PA">Pará</option>
                    <option value="TO">Tocantins</option>
                    <option value="RO">Rondônia</option>
                    <option value="AC">Acre</option>
                </optgroup>
				</select></p>
				<p><label for="lblCid">Cidade: </label><input type="text" name="txtCid" id="lblCid" size="37" maxlength="40" placeholder="Digite sua Cidade"></p>
		</fieldset>
		<fieldset id="redes-sociais">
			<legend>Vincular à outra conta</legend>
			<p><input type="radio" name="tRedes" id="fb"><label for="fb"><img src="../img/form/redes_sociais/fb.png"></label></p>
			<p><input type="radio" name="tRedes" id="fl"><label for="fl"><img src="../img/form/redes_sociais/fl.png"></label></p>
			<p><input type="radio" name="tRedes" id="ig"><label for="ig"><img src="../img/form/redes_sociais/ig.png"></label></p>
			<p><input type="radio" name="tRedes" id="tb"><label for="tb"><img src="../img/form/redes_sociais/tb.png"></label></p>
			<p><input type="radio" name="tRedes" id="tt"><label for="tt"><img src="../img/form/redes_sociais/tt.png"></label></p>
		</fieldset>
		<input type="reset" name="limpar" value="Limpar" id="btnReset">
		<button type="submit">Cadastrar</button>
		</form>
		

	</section>

	<footer class="rodape">
		<p>Copyright&copy; 2021 - by Ricardo e Bruno</p>
		<a href="faces " target="_blank">Facebook Ricardo</a>|
		<a href="faces " target="_blank">Facebook bruno</a>|
	</footer>
	</div>
</body>

</html>