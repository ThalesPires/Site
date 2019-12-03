<?php 

    include "conexao.php";

    $Jogo = $_POST['Jogo'];
    $Ano = $_POST['AnoDeLançamento'];
    $Desenvolvedora = $_POST['Desenvolvedora'];

    $query = "INSERT INTO jogos (Jogo, AnoDeLançamento, Desenvolvedora) VALUES ('".$Jogo."', '".$Ano."', '".$Desenvolvedora."')";

    $conexao = getConnection();

    mysqli_query($conexao, $query);

    echo "<script> alert('Jogo cadastrado'); location.href='pagina.php'; </script>"

?>