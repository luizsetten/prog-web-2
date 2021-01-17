<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body><?php include "header.php" ?>

    <form action="" class="container" method="GET">
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
    <div class="container">
        <table class="table table-striped">
            <?php
            if (!isset($_GET['numero']) || empty($_GET['numero'])) {
                return;
            }
            ?>
            <table class="table table-hover">
                <thead class="table-dark">
                    <th scope="col"> Tabuada do número
                        <?php $x = $_GET['numero'] ?? 0;
                        echo ($x); ?>
                    </th>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                print($x);
                                print ' x ';
                                print($i);
                                print ' = ';
                                print($i * $x);
                                ?>
                            <td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </table>
    </div>
</body>

</html>