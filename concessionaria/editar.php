<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária - Gerenciamento de Veículos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
    <script src="js/editar.js"></script>
</head>

<body>
    <div class="container my-3 ">
        <?php
        include "cabeçalho.php";
        ?>

        <?php
        include "navbar.php";
        ?>

        <?php
        include "./utils/mysql_connect.php";
        ?>

        <?php
        $id = $_POST['id'];
        echo $id;
        $query = sprintf("SELECT * FROM carros WHERE id=$id");
        $dados = mysqli_query($con, $query) or die(mysqli_error($con));
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
        $teste = mysqli_fetch_object($dados);
        echo '<pre>';
        print_r($teste);
        echo '</pre>';
        echo $teste->preco;

        ?>

        <form id="formVeiculo" method="POST" class="row">
            <div class="form-group col-md-6">
                <label>Marca:</label>
                <select id="marca" class="form-control custom-select">
                    <option value="">-- Selecionar --</option>
                    <option value="Chevrolet" <?= $teste->marca == 'Chevrolet' ? ' selected="selected"' : ''; ?>>Chevrolet</option>
                    <option value="Ford" <?= $teste->marca == 'Ford' ? ' selected="selected"' : ''; ?>>Ford</option>
                    <option value="Hyundai" <?= $teste->marca == 'Hyundai' ? ' selected="selected"' : ''; ?>>Hyundai</option>
                </select>
                <div class="alert-danger w-100 p-2 d-none">Marca é obrigatório</div>
            </div>
            <div class="form-group col-md-6">
                <label>Modelo:</label>
                <input type="text" id="modelo" class="form-control" value="<?= $teste->modelo ?>" placeholder="Insira o nome do modelo">
                <div class="alert-danger w-100 p-2 d-none">Modelo inválido</div>
            </div>
            <div class="form-group col-md-6">
                <label>Ano:</label>
                <input type="number" id="ano" class="form-control" value="<?= $teste->ano ?>" placeholder="Insira o ano do modelo">
                <div class="alert-danger w-100 p-2 d-none">Ano inválido</div>
            </div>
            <div class="form-group col-md-6">
                <label>Preço:</label>
                <input type="text" id="preco" class="form-control" value="<?= $teste->preco ?>" placeholder="Insira o preço do modelo">
                <div class="alert-danger w-100 p-2 d-none">Preço inválido</div>
            </div>
            <div class="form-group col-md-6">
                <label>Foto:</label>
                <input type="text" id="foto" class="form-control" value="<?= $teste->foto ?>" placeholder="Insira o nome da foto">
            </div>
            <div class="form-group col-md-6">
                <label>Cor:</label>
                <select id="cor" class="form-control custom-select">
                    <option value="">-- Selecionar --</option>
                    <option value="Preto" <?= $teste->cor == 'Preto' ? ' selected="selected"' : ''; ?>>Preto</option>
                    <option value="Branco" <?= $teste->cor == 'Branco' ? ' selected="selected"' : ''; ?>>Branco</option>
                    <option value="Prata" <?= $teste->cor == 'Prata' ? ' selected="selected"' : ''; ?>>Prata</option>
                    <option value="Vermelho" <?= $teste->cor == 'Vermelho' ? ' selected="selected"' : ''; ?>>Vermelho</option>
                </select>
                <div class="alert-danger w-100 p-2 d-none">Cor é obrigatório</div>
            </div>
            <div class="form-group col-md-12">
                <label>Descrição:</label>
                <textarea class="form-control" id="descricao" rows="10" placeholder="Insira a descrição do veículo"><?= $teste->descricao ?></textarea>
                <div class="alert-danger w-100 p-2 d-none">Descrição é obrigatório</div>
            </div>
            <div class="form-group col-md-12 text-right">
                <button type="submit" class="btn btn-primary">
                    Salvar Veículo
                </button>
                <button type="reset" class="btn btn-secondary">
                    Limpar
                </button>
            </div>
        </form>
        <hr>
        <?php include "footer.php" ?>
    </div>

</body>

</html>