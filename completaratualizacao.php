<?php
session_start();
include("conexao.php");
$id_email = $_SESSION['id_email'];
$sql="select * from usuario where id_email= '$id_email'";
$pesq = $mysqli->query($sql);
$dados = $pesq->fetch_assoc();
$numc = $dados['num_cadastro'];
$nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$nick = mysqli_real_escape_string($mysqli, trim($_POST['nick']));
$email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
$senha = mysqli_real_escape_string($mysqli, trim($_POST['senha']));
if(empty($nome)){
    $nome = $dados['nome'];
}
if(empty($nick)){
    $nick = $dados['nick'];
}
if(empty($email)){
    $email = $id_email;
}
if(empty($senha)){
    $senha = $dados['senha'];
}
$sql = "update usuario set nome = '$nome', " . "nick = '$nick', " . "id_email = '$email', " . "senha = '$senha' " . "where num_cadastro = $numc";
$mysqli->query($sql);
if(isset($numc)){
    $_SESSION['atualizado'] = true;
}
$_SESSION['id_email'] = $email;
$mysqli->close();
header('Location: meuperfil.php');
exit;
?>