<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço do combustivel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="quantidade">Quantidade de combustível (L):</label>
            <input type="number" step="0.01" name="quantidade" id="quantity" class="form-control" value="0.00"/>
            <br>
            <label for="combustivel">Tipo de combustível: </label>
            <select name="combustivel" id="combustivel">
                <option value="alcool">Álcool</option>
                <option value="gasolina">Gasolina</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php

      $combustivel = $_GET['combustivel'] ?? 0;
      $quantidade = $_GET['quantidade'] ?? 0;
      $precofinal = 0;
      print'<h3 class="container">';

      if($combustivel == 'alcool') {
        if($quantidade > 20) {
            $precofinal = $quantidade*(0.95*2.9);
          } else {
            $precofinal = $quantidade*(0.97*2.9);
          }
      } else {
        if($quantidade > 20) {
            $precofinal = $quantidade*(0.94*3.3);
          } else {
            $precofinal = $quantidade*(0.96*3.3);
          }
      }

      print'Preço final: R$ ';
      $precofinal2 = number_format($precofinal, 2, ',', '');
      print($precofinal2);
      print '<br>';
      print'</h3>';
      
    ?>
</body>
</html>