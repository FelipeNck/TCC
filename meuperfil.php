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
        <title>Meu perfil</title>
    </head>
    <body class="principal">
        <div id="conteudo">
            <a href="index.php"> Retornar à página principal</a>
            <h1> Perfil do Usuário </h1>
            <?php
                if(empty($_SESSION['valido'])){
                    header('Location: cadastro.php');
                    exit;
                }
                if(isset($_SESSION['valido'])){
                    $id_email = $_SESSION['id_email'];
                    $sql="select * from usuario where id_email= '$id_email'";
                    $pesq = $mysqli->query($sql);
                    $dados = $pesq->fetch_assoc();
                    echo "<p> Número de cadastro: " . $dados['num_cadastro'] . "</p>";
                    echo "<p> Nickname de usuário: " . $dados['nick'] . "</p>";
                    echo "<p> Nome: " . $dados['nome'] . "</p>";
                    echo "<p> E-mail: " . $id_email . "</p><hr/>";
                    echo "<p> Pontuação em jogo: " . $dados['pontuação'] . "</p>";
                    echo "<p> Vitórias: " . $dados['vitórias'] . "</p>";
                    echo "<p> Derrotas: " . $dados['derrotas'] . "</p>";
                    echo "<p> Número de partidas jogadas: " . $dados['num_partidas'] . "</p>";
                }
            ?>
            <hr/><h3> Modificação de dados </h3>
            <p> Para modificar seus dados, informe sua senha atual: </p>
                <form action="validarsenha.php" method="post">
                    <input type="password" maxlength="25" size="40" name="senha" placeholder="Senha" required>
                    <input id="button" type="submit" value="Confirmar">
                    <?php
                        if(isset($_SESSION['incorreto'])):
                    ?>
                    <div class="msg">
                        <p>Senha incorreta.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['incorreto']);
                    ?>
                    <?php
                        if(isset($_SESSION['atualizado'])):
                    ?>
                    <div class="msg">
                        <p>Dados atualizados com sucesso.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['atualizado']);
                    ?>
                </form>
        </div>
    </body>
</html>