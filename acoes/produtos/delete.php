<?php
    // Incluindo Conexao
    include("../../conexao.php");

    // Declarando as Variáveis com os valores do Front
    $id  = mysqli_real_escape_string($conn, $_GET['IdProduto']);

    // Inserindo dados no banco via query
    $query = "DELETE FROM produto WHERE id = '$id'";
    $busca = mysqli_query($conn, $query);

    // Verificando se a query foi executada com sucesso
    if ($busca) {
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Erro ao excluir o produto.";
    }
?>



