<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atualização de dados</title>
</head>
<body class="principal">
    <form id="conteudo" action="completaratualizacao.php" method="post">
        <h1 align="center">Atualize seus dados</h1>
        <p> Obs: Não é necessário atualizar todos.</p>
        <p><a href="meuperfil.php" style="color: blue;">Retornar ao perfil</a></p>
        <input type="text" maxlength="50" size="30" name="nome" placeholder="Nome">
        <input type="text" maxlength="50" size="30" name="nick" placeholder="Nick">
        <input type="email" maxlength="50" size="30" name="email" placeholder="Email">
        <input type="password" maxlength="25" size="30" name="senha" placeholder="Senha">
        <input id="button" type="submit" value="Atualizar">
    </form>
</body>
</html>