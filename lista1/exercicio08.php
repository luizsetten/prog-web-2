<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de salario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="salario">Salário fixo (R$):</label>
            <input type="number" step="0.01" name="salario" id="salary" class="form-control" value="0.00"/>
            <label for="vendas">Total de vendas (R$):</label>
            <input type="number" step="0.01" name="vendas" id="sells" class="form-control" value="0.00"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $vendas = $_GET['vendas'] ?? 0;
      $salario = $_GET['salario'] ?? 0;
      $salariofinal = 0;
      print'<h3 class="container">';

      if($vendas > 1500) {
        $salariofinal = $salario + ($vendas*0.03) + ($vendas-1500)*0.05;
      } else {
          $salariofinal = $salario  + ($vendas*0.03);
      }
      print'Salario final: R$ ';
      $salariofinal2 = number_format($salariofinal, 2, ',', '');
      print($salariofinal2);
      print '<br>';
      print'</h3>';
      
    ?>
</body>
</html>