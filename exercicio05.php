<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de reajuste de salário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="salario">Valor do salário (R$):</label>
            <input type="number" step="0.01" name="salario" id="salary" class="form-control" value="0.00"/>
            <label for="ajuste">Reajuste de (%):</label>
            <input type="number" step="0.01" name="ajuste" id="adjust" class="form-control" value="0.00"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $w = $_GET['salario'] ?? 0;
      $adjust = $_GET['ajuste'] ?? 0;
      print'<h3 class="container">';
      print'Reajuste de: R$ ';
      $readjust = number_format(($adjust), 2, ',', '');
      print($readjust);
      print '<br>';
      print'Salário final: R$ ';
      $finalsalary = number_format($w*(1+($adjust/100)), 2, ',', '');
      print($finalsalary);
      print'</h3>';
      
    ?>
</body>
</html>