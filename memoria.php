<?php
    session_start();
    include("conexao.php");
    if(empty($_SESSION['valido'])){
        $_SESSION['jgmemoria'] = true;
        header('Location: login.php');
        exit;
    } else {
        $email = $_SESSION['id_email'];
        $sql = "UPDATE usuarios SET ultimo_jogo = 'memoria' WHERE id_email = '$email'";
        $mysqli->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylememoria.css">
    <title>Jogo da memória</title>
</head>
<body>
    <script>
        document.write(pontuacao);
    </script>
    <div id="mensagem"></div>
    <div id="baralho"></div>
    <script src="memoria.js"></script>
</body>
</html>