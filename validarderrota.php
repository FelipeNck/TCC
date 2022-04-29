<?php
session_start();
include("conexao.php");

$email = $_SESSION['id_email'];
$sql = "UPDATE usuario SET pontuação = pontuação-50, derrotas = derrotas+1, num_partidas = num_partidas+1 WHERE id_email = '$email'";
$mysqli->query($sql);
$mysqli->close();

header('Location: jogadorvscomputador.php')
?>