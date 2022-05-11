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
    <link rel="stylesheet" href="teste.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="cabecalho">
            <ul class="info">
                <?php
                    if(empty($_SESSION['valido'])):
                ?>
                <li class="menu"><a href="login.php">Logar</a></li>
                <li class="menu"><a href="cadastro.php">Cadastrar</a></li>
                <?php
                    endif
                ?>
                <?php
                    if(isset($_SESSION['valido'])):
                    $id_email = $_SESSION['id_email'];
                    $sql="select nick from usuario where id_email= '$id_email'";
                    $pesq = $mysqli->query($sql);
                    $nick = $pesq->fetch_assoc();
                ?>
                <li class="perfil">   
                    <img class="imgperfil" src="./img/imgperfil.png" alt="">
                    <?php echo "<p class='nick'>".$nick['nick']."</p>" ?>
                    <ul>
                        <li><a href="meuperfil.php">Perfil</a></li>
                        <li><a href="sair.php">Sair</a></li>
                    </ul>
                </li>
                <?php
                    endif
                ?>
            </ul>

            <img class="logo" src="./img/logo2.png" alt=""> 
        </div>
    </header>
    
    <main>
        <div>ultimo jogo acessado</div>

        <div>jogos</div>
    </main>
</body>
</html>