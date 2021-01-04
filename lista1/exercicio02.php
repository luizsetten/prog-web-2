<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    <form action="" class="container" method="GET">
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

      $x = $_GET['numero'] ?? 0;
      print'<h3 class="container">';
      print'Tabuada do número ';
      print($x);
      print'</h3>';
      print'<h4 class="container">';
      for($i = 1; $i <= 10; $i++) {
        print '<br>';
        print($x);
        print 'x';
        print($i);
        print '=';
        print($i * $x);
      }
      print'</h4>';
    ?>
</body>
</html>