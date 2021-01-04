<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de preço</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="custo">Custo de fabricação(R$):</label>
            <input type="number" step="0.01" name="custo" id="weight" class="form-control" value="0.00"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $w = $_GET['custo'] ?? 0;
      // $price = $w + $w*0.28 + $w*0.45;
      print'<h3 class="container">';
      print'Preço do veículo: R$ ';
      $finalprice = number_format($w*(1.73), 2, ',', '');
      print($finalprice);
      print'</h3>';
      
    ?>
</body>
</html>