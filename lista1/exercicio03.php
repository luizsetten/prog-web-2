<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="peso">Peso(kg):</label>
            <input type="number" step="0.01" name="peso" id="weight" class="form-control" value="0.00"/>
            <label for="altura">Altura(m):</label>
            <input type="number" step="0.01" name="altura" id="height" class="form-control" value="0.00"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php
      function imc($peso, $altura) {
          if($altura == 0) {
              return 0;
          }
          $imc = $peso/($altura * $altura);
          return $imc;
      }

      $w = $_GET['peso'] ?? 0;
      $h = $_GET['altura'] ?? 0;
      print'<h3 class="container">';
      print'IMC: ';
      $imc = imc($w, $h);
      print($imc);
      print'</h3>';
      
    ?>
</body>
</html>