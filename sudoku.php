<?php
    session_start();
    include("conexao.php");

    if(empty($_SESSION['valido'])){
        $_SESSION['sudoku'] = true;
        header('Location: login.php');
        exit;
    } else {
        $email = $_SESSION['id_email'];
        $sql = "UPDATE usuarios SET ultimo_jogo = 'velha2' WHERE id_email = '$email'";
        $mysqli->query($sql);
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widht=device-widht initial-scale=1.0 scalable=no">
        <title>Sudoku</title>


        <link rel="stylesheet" href="sudoku.css">
        <script src="sudoku.js"></script>
    </head>

    <body>
        <h1>Sudoku</h1>
        <hr>
        <h2 id="errors">0</h2>

        <div id="placa"></div>
        <br>
        <div id="valeu"></div>
    </body>
</html>