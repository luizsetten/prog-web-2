<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de reajuste de salário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>

<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="salario">Valor do salário (R$):</label>
            <input type="number" step="0.01" name="salario" id="salary" class="form-control" value="0.00" />
            <label for="ajuste">Reajuste de (%):</label>
            <input type="number" step="0.01" name="ajuste" id="adjust" class="form-control" value="0.00" />
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
    if (!isset($_GET['salario']) || empty($_GET['salario']) || !isset($_GET['ajuste']) || empty($_GET['ajuste'])) {
        return;
    }
    $w = $_GET['salario'] ?? 0;
    $adjust = $_GET['ajuste'] ?? 0;
    $readjust = number_format($w * ($adjust / 100), 2, ',', '');
    $finalsalary = number_format($w * (1 + ($adjust / 100)), 2, ',', '');
    ?>

    <h3 class="container">
        Reajuste de: R$ <?php print($readjust); ?>
        <br>
        Salário final: R$ <?php print($finalsalary); ?>
    </h3>

</body>

</html>