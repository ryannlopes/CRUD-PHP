<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>
    <?php require('navbar.php');?>

    <!-- Pessoa -->
    <table class="table" border="1px" style="text-align: center;">
        <h1>Pessoa</h1>
        <thead class="thead-dark">
          <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col"></th>
            <th scope="col"><a type="button" class="btn btn-success" href="cadPessoa.php">CADASTRAR</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            require('conexao.php');

            $query = "SELECT * FROM pessoa";
            $busca = mysqli_query($conn, $query);

            while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['CPF'];
            ?>
            <td><?php echo $dados['CPF'] ?> </td>
            <td><?php echo $dados['nomePessoa'] ?></td>
            <td><?php echo $dados['idadePessoa'] ?></td>
            <td><a class="btn btn-warning" href="editPessoa.php?CPF=<?php echo $dados['CPF']; ?>">EDITAR</a></td>
            <td><a class='btn btn-danger btn-sn' href="./acoes/pessoas/delete.php?CPF=<?php echo $dados['CPF']; ?>" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>DELETAR</td>
          </tr>

          <?php } ?>
        </tbody>
      </table>    
</body>
</html>