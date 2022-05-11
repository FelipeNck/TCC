<?php
    session_start();
    include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Site de Jogos</title>
    </head>

    <body class="principal">
        <div id="conteudo">
            <?php
                if(isset($_SESSION['valido'])):
                $id_email = $_SESSION['id_email'];
                $sql="select nick from usuario where id_email= '$id_email'";
                $pesq = $mysqli->query($sql);
                $nick = $pesq->fetch_assoc();
                echo "<div> Você está logado como: " . $nick['nick'] . "</div>";
            ?>
            <div class="opcao">
                <img src="./img/perfil.png"/><br>
                <a href="meuperfil.php" style="color: rgb(172, 228, 235);">Acessar meu perfil</a><br>
            </div>
            <div class="opcao">
                <img src="./img/sairdaconta.png"/><br>
                <a href="sair.php" style="color: rgb(172, 228, 235);">Sair</a><br>
            </div>
            <?php
                endif;
            ?>
            <?php
                if(empty($_SESSION['valido'])):
            ?>
            <div class="opcao">
                <img src="./img/cadastrar.png"/><br>
                <a href="cadastro.php" style="color: rgb(172, 228, 235);">Cadastrar-se</a> ou
                <a href="login.php" style="color: rgb(172, 228, 235);">Realizar login</a>
            </div>
            <?php
                endif;
            ?>
            <hr/>
            <div class="opcao">
                <img src="./img/jogovelha.png"/><br>
                <a href="jogadorvscomputador.php" style="color: rgb(172, 228, 235);">Jogo da Velha (VS computador)</a><br>
                <a href="jogadorvsjogador.html" style="color: rgb(172, 228, 235);">Jogo da Velha (Dois jogadores)</a>
            </div>
            <div class="opcao">
                <img src="./img/classificar.png"/><br>
                <a href="lista.php" style="color: rgb(172, 228, 235);">Ver lista de classificações</a>
            </div>
        </div> 
    </body>
</html>