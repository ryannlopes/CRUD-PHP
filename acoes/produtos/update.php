<?php
// Arquivo: update.php
require_once '../../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf = $_POST['id'];
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $peco = $_POST['peco'];

    // atualiza registro no banco de dados
    $query = "UPDATE produto SET nomeProduto= '$nome', pesoProduto = '$peso', precoProduto = '$preco' WHERE IdProduto = '$id'";
    $resultado = mysqli_query($conn, $query);

    if ($resultado) {
        header("Location: ../../index.php");
        exit();
    } else {
        // exibe mensagem de erro
        echo "Erro ao atualizar registro: " . mysqli_error($conn);
    }
} else {
    echo "Erro ao atualizar os dados da pessoa.";
}
?>