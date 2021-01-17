<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maior, menor ou igual a 0</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body><?php include "header.php" ?>
  <form action="" class="container" method="POST">
    <div class="form-group">
      <label for="numero">Número:</label>
      <input type="number" name="numero" id="number" class="form-control" value="" />
    </div>
    <br>
    <div class="form-group">
      <button class="btn btn-primary">
        Enviar
      </button>
    </div>
  </form>
  <?php
  if (!isset($_POST['numero']) && empty($_POST['numero'])) {
    return;
  }
  $x = $_POST['numero'] ?? 0;
  ?>

  <br>
  <div class="container alert alert-primary">
    O número
    <?php
    print($x);
    if ($x > 0) {
      print ' é maior que zero.';
    } else if ($x < 0) {
      print ' é menor que zero.';
    } else {
      print ' é igual a zero.';
    }
    ?>
  </div>
</body>

</html>