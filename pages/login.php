<?php
session_start();
include('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])){
    header('Location: ../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select idUserAdm, nome, email from useradm where email = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_fetch_assoc($result);

if(isset($row)){
    $_SESSION['idUserAdm'] = $row['idUserAdm'];
    $_SESSION['login'] = $row['email'];
    $_SESSION['nome'] = $row['nome'];
    header('Location: ../painel.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
    exit();    
}

if(!empty($_POST['login']) && !empty($_POST['senha'])){

    $usuario = trim(htmlspecialchars($_POST['login']));
    $senha = trim(htmlspecialchars($_POST['senha']));
}