<?php 

    function getConnection(){

        $conexao = mysqli_connect("localhost", "root", "", "site");

        return $conexao;
    }

?>