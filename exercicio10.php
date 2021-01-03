<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegivel a aposentadoria?</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="nascimento">Ano de nascimento:</label>
            <input type="number" name="nascimento" id="born" class="form-control" value="0.00"/>
            <br>
            <label for="trabalho">Tempo de trabalho (Anos): </label>
            <input type="number" name="trabalho" id="work" class="form-control" value="0.00"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $nascimento = $_GET['nascimento'] ?? 0;
      $trabalho = $_GET['trabalho'] ?? 0;
      print'<h3 class="container">';
      
      $idade = 0;

      if($nascimento > 0) {
        $idade = 2021 - $nascimento;
      } else {
        $idade = 0;
      }

      if(($idade >= 60 && $trabalho >= 25) || $trabalho >= 30 || $idade >= 65) {
        print 'REQUERER APOSENTADORIA';
      } else {
        print 'NÃO REQUERER APOSENTADORIA';
      }
      print '<br>';
      print'</h3>';
      
    ?>
</body>
</html>