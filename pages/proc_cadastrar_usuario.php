<?php
    include("conexao.php");
    include("verifica_login_pages.php");

if(empty($_POST['txtNome']) || empty($_POST['txtSenha']) || empty($_POST['txtMail'])){
    echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/pi_uc12/form.php'>
        <script type=\"text/javascript\">
            alert(\"Usuário não foi cadastrado com Sucesso.\");
        </script>
    "; 
}else{
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $idUser = mysqli_real_escape_string($conexao, $_POST['idUser']);
    $nome = mysqli_real_escape_string($conexao, $_POST['txtNome']);
    $senha = mysqli_real_escape_string($conexao, $_POST['txtSenha']);
    $email = mysqli_real_escape_string($conexao, $_POST['txtMail']);

    $result_editar = "INSERT INTO useradm (nome, senha, email) VALUES ('$nome',md5('$senha'),'$email')"; 
    $resultado_editar = mysqli_query($conexao, $result_editar);
    }
}  
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
        <?php
        if(mysqli_affected_rows($conexao) !=0){
            echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto_animes/painel.php'>
            <!--<script type=\"text/javascript\">
                alert(\"Usuário cadastrado com Sucesso.\");
            </script>-->
        ";        
        }else{
            echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto_animes/painel.php'>
            <!--<script type=\"text/javascript\">
                alert(\"Usuário não foi cadastrado com Sucesso.\");
            </script>-->
        ";
        }?>
    </body>
</html>
<?php $conexao->close(); ?>
