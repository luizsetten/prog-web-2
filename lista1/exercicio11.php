<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="name" class="form-control"/>
            <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control"/>
            <br>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control">
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="age" class="form-control"/>
            <br>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $nome = $_POST['nome'] ?? "";
      $email = $_POST['email'] ?? "";
      $cpf = $_POST['cpf'] ?? "";
      $idade = $_POST['idade'] ?? "";
      print'<h3 class="container">';
      print 'Nome: ';
      print($nome);
      print '<br>';

      print 'E-mail: ';
      print($email);
      print '<br>';

      print 'CPF: ';
      print($cpf);
      print '<br>';

      print 'Idade (Anos): ';
      print($idade);
      print '<br>';
      print'</h3>';

      print '<p class="container">
        O envio dos dados é feito por meio de uma requisição HTTP (no caso desse formulário do tipo POST), 
        os dados são enviados no payload da requisição para o servidor que por sua vez o software rodando 
        no servidor irá processar esses dados e enviar uma resposta para o cliente com base nessas informações.  
      </p>';
      
    ?>
</body>
</html>