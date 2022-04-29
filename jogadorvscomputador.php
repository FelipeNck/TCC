<?php
    session_start();
    if(empty($_SESSION['valido'])){
        header('Location: cadastro.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylejv.css">
    <title>JOGO DA VELHA (VS COMPUTADOR)</title>
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <img class="imgmenu" src="./img/menu.png" alt="">
    </label>
    <nav>
        <ul>
            <li><a href="lista.php"><img class="imgs" src="./img/ranking.png" alt=""> Ranking</a></li>
            <li><a href="index.php"><img class="imgs" src="./img/retornar.png" alt=""> Página Principal</a></li>
        </ul>
    </nav>
    <div id="tela-preta"></div>
    <div class="container">
        <h2>Jogo da velha</h2>
        <div class="grid">
            <div class="celula" id="0"></div>
            <div class="celula" id="1"></div>
            <div class="celula" id="2"></div>
            <div class="celula" id="3"></div>
            <div class="celula" id="4"></div>
            <div class="celula" id="5"></div>
            <div class="celula" id="6"></div>
            <div class="celula" id="7"></div>
            <div class="celula" id="8"></div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>