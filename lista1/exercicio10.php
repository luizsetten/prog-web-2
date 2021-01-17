<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegivel a aposentadoria?</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  <form action="" class="container" method="GET">
    <div class="form-group">
      <label for="nascimento">Ano de nascimento:</label>
      <input type="number" name="nascimento" id="born" class="form-control" />
      <br>
      <label for="trabalho">Tempo de trabalho (Anos): </label>
      <input type="number" name="trabalho" id="work" class="form-control" />
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
  if (!isset($_GET['nascimento']) || empty($_GET['nascimento']) || !isset($_GET['trabalho']) || empty($_GET['trabalho'])) {
    return;
  }
  $nascimento = $_GET['nascimento'] ?? 0;
  $trabalho = $_GET['trabalho'] ?? 0;
  $idade = 0;

  if ($nascimento > 0) {
    $idade = 2021 - $nascimento;
  } else {
    $idade = 0;
  }
  ?>

  <h3 class="container">

    <?php
    if (($idade >= 60 && $trabalho >= 25) || $trabalho >= 30 || $idade >= 65) {
    ?>
      <div class="container alert alert-primary">
        REQUERER APOSENTADORIA
      </div>
    <?php
    } else {
    ?>
      <div class="container alert alert-danger">
        NÃO REQUERER APOSENTADORIA
      </div>
    <?php
    }
    ?>
    <br>
  </h3>
</body>

</html>