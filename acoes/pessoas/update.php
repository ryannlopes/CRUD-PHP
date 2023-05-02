<?php
    //Incluindo Conexao
    include("../../conexao.php");

    //Declarando as Variveis com os valores do Front
    $cpf   = $_POST['cpf'];
    $nome  = $_POST['nome'];
    $idade = $_POST['idade'];

    //Inserindo dados no banco via query
    $query = "UPDATE pessoa(CPF, nomePessoa, idadePessoa) VALUE  ('$cpf', '$nome', '$idade')";
    $busca = mysqli_query($conn, $query);
    header("Location: ../../index.php");
?>