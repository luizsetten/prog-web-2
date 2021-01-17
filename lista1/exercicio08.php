<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de salario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>

<body>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="salario">Salário fixo (R$):</label>
            <input type="number" step="0.01" name="salario" id="salary" class="form-control" value="0.00" />
            <label for="vendas">Total de vendas (R$):</label>
            <input type="number" step="0.01" name="vendas" id="sells" class="form-control" value="0.00" />
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
    if (!isset($_GET['vendas']) || empty($_GET['vendas']) || !isset($_GET['salario']) || empty($_GET['salario'])) {
        return;
    }
    $vendas = $_GET['vendas'] ?? 0;
    $salario = $_GET['salario'] ?? 0;
    $salariofinal = 0;

    if ($vendas > 1500) {
        $salariofinal = $salario + ($vendas * 0.03) + ($vendas - 1500) * 0.05;
    } else {
        $salariofinal = $salario  + ($vendas * 0.03);
    }
    $salariofinal2 = number_format($salariofinal, 2, ',', '');
    ?>

    <h3 class="container">
        Salario final: R$ <?php print($salariofinal2); ?>
    </h3>
</body>

</html>