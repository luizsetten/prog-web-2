<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>

<body>
    <form action="" class="container" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="name" class="form-control" />
            <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control" />
            <br>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control">
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="age" class="form-control" />
            <br>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <br>
    <p class="container alert alert-primary">
        O envio dos dados é feito por meio de uma requisição HTTP (no caso desse formulário do tipo POST),
        os dados são enviados no payload da requisição para o servidor que por sua vez o software rodando
        no servidor irá processar esses dados e enviar uma resposta para o cliente com base nessas informações.
    </p>
    <br>
    <?php
    if (!isset($_POST['nome']) || empty($_POST['nome']) || !isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['cpf']) || empty($_POST['cpf']) || !isset($_POST['idade']) || empty($_POST['idade'])) {
        return;
    }
    $nome = $_POST['nome'] ?? "";
    $email = $_POST['email'] ?? "";
    $cpf = $_POST['cpf'] ?? "";
    $idade = $_POST['idade'] ?? "";
    ?>

    <h3 class="container">
        Nome: <?php print($nome); ?>
        <br>
        E-mail: <?php print($email); ?>
        <br>
        CPF: <?php print($cpf); ?>
        <br>
        Idade (Anos): <?php print($idade); ?>
        <br>
    </h3>
</body>

</html>