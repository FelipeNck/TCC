<?php
session_start();
include("conexao.php");

$email = $_SESSION['id_email'];

$sql = "UPDATE jogo_velha SET pontuacao = pontuacao+100, vitorias = vitorias+1, partidas = partidas+1 WHERE usuario = '$email'";
$mysqli->query($sql);

$sql = "select count(*) as total from jogo_velha where usuario = '$email'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
if ($row['total'] == 0){
    $sql = "INSERT INTO jogo_velha (usuario) VALUES ('$email')";
    $mysqli->query($sql);
}

$sql = "UPDATE usuarios SET pontuacao = pontuacao+100  WHERE id_email = '$email'";
$mysqli->query($sql);
$mysqli->close();

header('Location: jogadorvscomputador.php');
?>