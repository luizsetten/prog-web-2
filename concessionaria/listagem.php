<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária - Gerenciamento de Veículos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-3 ">
        <?php 
            include "cabeçalho.php";
        ?>

        <?php 
            include "navbar.php";
        ?>

        <section>
            <header class="card-header p-3 mb-3">
                <h2>Veja os nossos veículos</h2>
            </header>
            <div class="card p-2 my-3">
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://placehold.it/400x400" class="img-thumbnail img-fluid">
                    </div>
                    <div class="col-md-9 p-3">
                        <h3>Modelo do Veículo</h3>
                        <p>
                            <strong>Marca:</strong> Marca do Veículo <br>
                            <strong>Preço:</strong> R$ 12.500,00 <br>
                            <strong>Cor:</strong> Preto
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, repudiandae voluptas maxime optio consequatur tempora assumenda quod doloribus dignissimos exercitationem quo eos voluptatibus. Facilis sit, vero eos exercitationem nobis itaque.
                        </p>
                        <p class="text-right">
                            <a href="editar.php" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Excluir</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <hr>
        <?php include "footer.php" ?>
    </div>
    
</body>
</html>