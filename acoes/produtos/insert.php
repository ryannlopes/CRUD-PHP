<?php
    //Incluindo Conexao
    include("../../conexao.php");

    //Declarando as Variveis com os valores do Front
    $nome   = $_POST['nome'];
    $peso   = $_POST['peso'];
    $preco  = $_POST['preco'];

    //Inserindo dados no banco via query
    $query = "INSERT INTO produto(nomeProduto, pesoProduto, precoProduto) 
    VALUE  ('$nome', '$peso', '$preco')";
    $busca = mysqli_query($conn, $query);
    header("Location: ../../produto.php");
?>