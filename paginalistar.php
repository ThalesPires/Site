<?php 
    session_start();
    include "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $conexao = getConnection();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        $select_jogos = "SELECT * FROM jogos";
        $conexao_jogos = mysqli_query($conexao, $select_jogos);
    ?>
    <table border = "1">
    <tr>
        <td>Nome do jogo</td>
        <td>Ano de lançamento</td>
        <td>Desenvolvedroa</td>
    </tr>
    <?php
        while($tabela_jogos = mysqli_fetch_assoc($conexao_jogos)){ ?>
    <tr>
        <td><?php echo $tabela_jogos['Jogo'] . "<br>";?></td>
        <td><?php echo $tabela_jogos['AnoDeLançamento'] . "<br>";?></td>
        <td><?php echo $tabela_jogos['Desenvolvedora'] . "<br>";?></td>
    </tr>
        <?php }; ?>
    </table>

    <br><a href="paginainicial.html">Pagina Inicial</a><br>
    <br><a href="pagina.php">Cadastro de jogos</a><br>
    
</body>
</html>