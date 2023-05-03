<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro de Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 30%;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
      }
      
      label {
        font-weight: bold;
        margin-bottom: 10px;
      }
      
      input {
        padding: 5px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
      }
    </style>
  </head>
  <body>
    <?php
      include("conexao.php");
      // Verifica se o CPF foi enviado via GET
      if (isset($_GET['IdProduto'])) {
        // Protege contra injeção de SQL
        $id = mysqli_real_escape_string($conn, $_GET['IdProduto']);

        // Consulta a pessoa com o IdProduto informado
        $query = "SELECT * FROM produto WHERE IdProduto = '$id'";
        $busca = mysqli_query($conn, $query);

        // Verifica se a consulta retornou algum resultado
        if (mysqli_num_rows($busca) > 0) {
          $dados = mysqli_fetch_array($busca);
        } else {
          echo "Produto não encontrada.";
          exit;
        }
      } else {
        echo "ID não informado.";
        exit;
      }
    ?>
    <form method="POST" action="./acoes/produtos/update.php">
      <h1>EDITAR PESSOA</h1>
      <label for="cpf">CPF:</label>
      <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($dados['IdProduto']) ?>">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($dados['nomeProduto']) ?>">
      <label for="peso">peso:</label>
      <input type="number" id="peso" name="peso" value="<?php echo htmlspecialchars($dados['pesoProduto']) ?>">
      <label for="preco">preço:</label>
      <input type="number" id="preco" name="preco" value="<?php echo htmlspecialchars($dados['precoProduto']) ?>">
      <button type="submit" class="btn btn-success">Editar</button>
    </form>
  </body>
</html>
