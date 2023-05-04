<?php
    // Incluindo Conexao
    include("../../conexao.php");

    // Verificando se o CPF foi enviado
    if(isset($_GET['CPF'])){
        // Declarando as Variáveis com os valores do Front
        $cpf = mysqli_real_escape_string($conn, $_GET['CPF']);

        // Inserindo dados no banco via query
        $query = "DELETE FROM pessoa WHERE cpf = '$cpf'";
        $busca = mysqli_query($conn, $query);

        // Verificando se a query foi executada com sucesso
        if($busca){
            header("Location: ../../index.php");
        } else {
            echo "Erro ao deletar registro!";
        }
    } else {
        echo "CPF não informado!";
    }
?>