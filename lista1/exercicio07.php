<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de salario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>

<body><?php include "header.php" ?>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="horas">Horas trabalhadas no mês:</label>
            <input type="number" step="0.01" name="horas" id="hours" class="form-control" value="0.00" />
            <label for="salario">Salário por hora (R$):</label>
            <input type="number" step="0.01" name="salario" id="salary" class="form-control" value="0.00" />
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
    if (!isset($_GET['horas']) || empty($_GET['horas']) || !isset($_GET['salario']) || empty($_GET['salario'])) {
        return;
    }
    $horas = $_GET['horas'] ?? 0;
    $horas = $horas / 4;
    $salario = $_GET['salario'] ?? 0;
    $salariofinal = 0;
    $horasextras = 0;

    if ($horas > 40) {
        $salariofinal = $salariofinal + ($salario * 40) + ($horas - 40) * ($salario * 1.5);
    } else {
        $salariofinal = $salario * $horas;
    }
    $salariofinal = $salariofinal * 4;

    $salariofinal2 = number_format($salariofinal, 2, ',', '');
    ?>

    <h3 class="container">
        Salario final: R$ <?php print($salariofinal2); ?>
        <br>
    </h3>

</body>

</html>