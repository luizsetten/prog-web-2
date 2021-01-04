<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="nota1">Nota 1:</label>
            <input type="number" step="0.01" name="nota1" id="note1" class="form-control" value="0.00"/>
            <label for="nota2">Nota 2:</label>
            <input type="number" step="0.01" name="nota2" id="note2" class="form-control" value="0.00"/>
            <label for="nota3">Nota 3:</label>
            <input type="number" step="0.01" name="nota3" id="note3" class="form-control" value="0.00"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $w = $_GET['nota1'] ?? 0;
      $x = $_GET['nota2'] ?? 0;
      $y = $_GET['nota3'] ?? 0;
      print'<h3 class="container">';
      print'Média final: ';
      $media = ($w + $x + $y)/3; 
      $mediafinal = number_format($media, 2, ',', '');
      print($mediafinal);
      print '<br>';
      if($media >= 6) {
          print'Aluno APROVADO!';
      } else {
        print'Aluno REPROVADO!';
      }
      print'</h3>';
      
    ?>
</body>
</html>