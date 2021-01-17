<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de preço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="custo">Custo de fabricação(R$):</label>
            <input type="number" step="0.01" name="custo" id="weight" class="form-control" value="0.00" />
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
    if (!isset($_GET['custo']) || empty($_GET['custo'])) {
        return;
    }
    $w = $_GET['custo'] ?? 0;
    $finalprice = number_format($w * (1.73), 2, ',', '');
    // $price = $w + $w*0.28 + $w*0.45;
    ?>

    <h3 class="container">
        Preço do veículo: R$ <?php print($finalprice); ?>
    </h3>

</body>

</html>