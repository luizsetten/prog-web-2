<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>

<body><?php include "header.php" ?>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="nota1">Nota 1:</label>
            <input type="number" step="0.01" name="nota1" id="note1" class="form-control" value="0.00" />
            <label for="nota2">Nota 2:</label>
            <input type="number" step="0.01" name="nota2" id="note2" class="form-control" value="0.00" />
            <label for="nota3">Nota 3:</label>
            <input type="number" step="0.01" name="nota3" id="note3" class="form-control" value="0.00" />
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
    if (!isset($_GET['nota1']) || empty($_GET['nota1']) || !isset($_GET['nota2']) || empty($_GET['nota2']) || !isset($_GET['nota3']) || empty($_GET['nota3'])) {
        return;
    }
    $w = $_GET['nota1'] ?? 0;
    $x = $_GET['nota2'] ?? 0;
    $y = $_GET['nota3'] ?? 0;
    $media = ($w + $x + $y) / 3;
    $mediafinal = number_format($media, 2, ',', '');
    ?>

    <h3 class="container">
        Média final: <?php print($mediafinal); ?>
        <br>

        <?php
        if ($media >= 6) {
            print 'Aluno APROVADO!';
        } else {
            print 'Aluno REPROVADO!';
        }
        ?>
    </h3>

</body>

</html>