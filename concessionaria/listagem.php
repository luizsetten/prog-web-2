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

        <?php 
            include "./utils/mysql_connect.php";
        ?>

        <section>
            <header class="card-header p-3 mb-3">
                <h2>Veja os nossos veículos</h2>
            </header>
            <?php
                $query = sprintf("SELECT * FROM carros"); //Não retorna nada pq o banco ta vazio
                $query2 = sprintf("INSERT INTO carros (id, marca, modelo, ano, preco, foto, cor, descricao) VALUES ('3','Chevrolet', 'Onix', 2018, 45000.00, 'teste.png', 'Branco', 'Muito top')");
                //$dados = mysqli_query($con, $query2) or die(mysqli_error($con));
                $dados = mysqli_query($con, $query) or die(mysqli_error($con));
                // // transforma os dados em um array
                $linha = mysqli_fetch_assoc($dados);
                // // calcula quantos dados retornaram
                $total = mysqli_num_rows($dados);

                for($i = 0; $i < $total; $i++){
                    $id=$linha['id'];
                    $marca=$linha['marca'];
                    $preco=$linha['preco'];
                    $cor=$linha['cor'];
                    $descricao=$linha['descricao'];
                    $modelo=$linha['modelo'];
                    $foto=$linha['foto'];
                    $ano=$linha['ano'];
                print <<<END
                    <div class="card p-2 my-3">
                    <div class="row">
                    <div class="col-md-3">
                        <img src="https://placehold.it/400x400" class="img-thumbnail img-fluid">
                    </div>
                        <div class="col-md-9 p-3">
                            <h3>$modelo</h3>
                            <p>
                                <strong>Marca:</strong> $marca <br>
                                <strong>Ano:</strong> $ano <br>
                                <strong>Preço:</strong> R$ $preco <br>
                                <strong>Cor:</strong> $cor
                            </p>
                            <p>
                                $descricao
                            </p>
                            <p class="text-right">
                                <a href="editar.php/?id=$id" class="btn btn-primary">Editar</a> //Inserir id aqui
                                <a href="#" class="btn btn-danger">Excluir</a> //Inserir id aqui ou fazer um metodo para remover
                            </p>
                        </div>
                        </div>
                        </div>

                    END;
                    }
                ?>
                
        </section>

        <hr>
        <?php include "footer.php" ?>
    
    
</body>
</html>