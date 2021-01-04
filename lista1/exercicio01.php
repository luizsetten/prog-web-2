<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior, menor ou igual a 0</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    <form action="" class="container" method="POST">
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="number" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
    <?php
      if(!isset($_POST['numero']) && !empty($_POST['numero'])) {
        return;
      }
      $x = $_POST['numero'] ?? 0;
      print'<h3 class="container">';
      print 'O número ';
      print($x);
      if($x > 0) {
        print ' é maior que zero.';
      } else if ($x < 0) {
        print ' é menor que zero.';
      } else {
        print ' é igual a zero.';
      }
      print'</h3>';
    ?>
</body>
</html>