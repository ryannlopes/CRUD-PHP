<?php
    //Incluindo Conexao
    include("../../conexao.php");

    //Declarando as Variveis com os valores do Front
    $id   = $_GET['IdProduto'];

    //Inserindo dados no banco via query
    $query = "DELETE FROM produto WHERE $id";
    $busca = mysqli_query($conn, $query);
    header("Location: ../../index.php");
?>