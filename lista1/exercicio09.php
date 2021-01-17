<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preço do combustivel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
  <form action="" class="container" method="GET">
    <div class="form-group">
      <label for="quantidade">Quantidade de combustível (L):</label>
      <input type="number" step="0.01" name="quantidade" id="quantity" class="form-control" value="0.00" />
      <br>
      <label for="combustivel">Tipo de combustível: </label>
      <select name="combustivel" id="combustivel" class="form-select">
        <option value="alcool">Álcool</option>
        <option value="gasolina">Gasolina</option>
      </select>
    </div>
    <br>
    <div class="form-group">
      <button class="btn btn-primary">
        Enviar
      </button>
    </div>
  </form>
  <br>
  <?php
  if (!isset($_GET['combustivel']) || empty($_GET['combustivel']) || !isset($_GET['quantidade']) || empty($_GET['quantidade'])) {
    return;
  }
  $combustivel = $_GET['combustivel'] ?? 0;
  $quantidade = $_GET['quantidade'] ?? 0;
  $precofinal = 0;

  if ($combustivel == 'alcool') {
    if ($quantidade > 20) {
      $precofinal = $quantidade * (0.95 * 2.9);
    } else {
      $precofinal = $quantidade * (0.97 * 2.9);
    }
  } else {
    if ($quantidade > 20) {
      $precofinal = $quantidade * (0.94 * 3.3);
    } else {
      $precofinal = $quantidade * (0.96 * 3.3);
    }
  }

  $precofinal2 = number_format($precofinal, 2, ',', '');

  ?>

  <h3 class="container">
    Preço final: R$ <?php print($precofinal2); ?>
    <br>
  </h3>
</body>

</html>