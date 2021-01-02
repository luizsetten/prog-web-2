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
            <label for="horas">Horas trabalhadas por semana:</label>
            <input type="number" step="0.01" name="horas" id="hours" class="form-control" value="0.00"/>
            <label for="salario">Salário por hora (R$):</label>
            <input type="number" step="0.01" name="salario" id="salary" class="form-control" value="0.00"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $horas = $_GET['horas'] ?? 0;
      $salario = $_GET['salario'] ?? 0;
      $salariofinal = 0;
      print'<h3 class="container">';

      print'Horas extras: ';
      if($horas > 40) {
        $salariofinal = $salariofinal + ($salario*40) + ($horas-40)*($salario*1.5);
      } else {
          $salariofinal = $salario*$horas;
      }
      $salariofinal = $salariofinal*4;

      print'Salario final: R$ ';
      $salariofinal2 = number_format($salariofinal, 2, ',', '');
      print($salariofinal2);
      print '<br>';
      print'</h3>';
      
    ?>
</body>
</html>