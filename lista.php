<?php
session_start();
include("conexao.php");
if(empty($_SESSION['lista'])){
    $_SESSION['lista'] = 'ponto';
}
if($_SESSION['lista'] == 'ponto'){
    $sql = "SELECT nick, pontuação FROM usuario ORDER BY pontuação DESC";
    $con = $mysqli->query($sql);
}
else if($_SESSION['lista'] == 'vitoria'){
    $sql = "SELECT nick, vitórias FROM usuario ORDER BY vitórias DESC";
    $con = $mysqli->query($sql);
}
else if($_SESSION['lista'] == 'num'){
    $sql = "SELECT nick, num_partidas FROM usuario ORDER BY num_partidas DESC";
    $con = $mysqli->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelista.css">
    <title>Ranking</title>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <img class="imgmenu" src="./img/menu.png" alt="">
    </label>
    <nav>
        <ul>
            <li><a href="jogadorvscomputador.php"><img class="imgs" src="./img/jogo.png" alt=""> Jogo</a></li>
            <li><a href="index.php"><img class="imgs" src="./img/retornar.png" alt=""> Página principal</a></li>
        </ul>
    </nav>
    <form align="center" action="metodolistagem.php" method="post">
        <p>
            Método de classificação:
            <select name="listagem" required>
                <option value=""> </option>
                <option value="ponto"> Pontuação </option>
                <option value="vitoria"> Número de vitórias </option>
                <option value="num"> Número de partidas jogadas </option>
            </select>
        </p>
        <input type="submit" name="Confirmar" value="Confirmar">
    </form>
    <?php
        if($_SESSION['lista'] == 'ponto'):
    ?>
    <div class="conteiner">
        <table>
            <tr>
                <td>Classificação</td>
                <td>Nick</td>
                <td>Pontuação</td>
            </tr>
            <?php $i = 1 ?>
            <?php while($dados = $con->fetch_array()){ ?>
            <tr>
                <td><?php echo $i."º lugar" ?></td>
                <?php $i++ ?>
                <td><?php echo $dados["nick"] ?></td>
                <td><?php echo $dados["pontuação"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php
        endif;
    ?>
    <?php
        if($_SESSION['lista'] == 'vitoria'):
    ?>
    <div class="conteiner">
        <table>
            <tr>
                <td>Classificação</td>
                <td>Nick</td>
                <td>Vitórias</td>
            </tr>
            <?php $i = 1 ?>
            <?php while($dados = $con->fetch_array()){ ?>
            <tr>
                <td><?php echo $i."º lugar" ?></td>
                <?php $i++ ?>
                <td><?php echo $dados["nick"] ?></td>
                <td><?php echo $dados["vitórias"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php
        endif;
    ?>
    <?php
        if($_SESSION['lista'] == 'num'):
    ?>
    <div class="conteiner">
        <table>
            <tr>
                <td>Classificação</td>
                <td>Nick</td>
                <td>Número de partidas jogadas</td>
            </tr>
            <?php $i = 1 ?>
            <?php while($dados = $con->fetch_array()){ ?>
            <tr>
                <td><?php echo $i."º lugar" ?></td>
                <?php $i++ ?>
                <td><?php echo $dados["nick"] ?></td>
                <td><?php echo $dados["num_partidas"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php
        endif;
    ?>
</body>
</html>