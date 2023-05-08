<?php
    // Incluindo Conexao
    include("../../conexao.php");

    // Verificando se o Id foi enviado
    if(isset($_GET['IdProduto'])){
        // Declarando as Variáveis com os valores do Front
        $id = mysqli_real_escape_string($conn, $_GET['IdProduto']);

        // Inserindo dados no banco via query
        $query = "DELETE FROM produto WHERE IdProduto = '$id'";
        $busca = mysqli_query($conn, $query);

        // Verificando se a query foi executada com sucesso
        if($busca){
            header("Location: ../../produto.php");
        } else {
            echo "Erro ao deletar registro!";
        }
    } else {
        echo "id não informado!";
    }
?>