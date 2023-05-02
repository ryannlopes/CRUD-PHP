<?php
    //Incluindo Conexao
    include("../../conexao.php");

    //Declarando as Variveis com os valores do Front
    $cpf   = $_GET['CPF'];

    //Inserindo dados no banco via query
    $query = "DELETE FROM pessoa WHERE $cpf";
    $busca = mysqli_query($conn, $query);
    header("Location: ../../index.php");
?>