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
        <?php include "cabeçalho.php"; ?>
        <?php include "./utils/mysql_connect.php"; ?>

        <?php include "navbar.php"; ?>

        <section class="card">
            <header class="card-header p-3">
                <h2>Bem-vindo(a) à nossa concessionária!</h2>
            </header>
            <div class="card-body p-3">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem maiores laudantium facilis, rerum consequuntur minima possimus eum quod harum officia vitae voluptatem enim suscipit atque, earum ex sit dolorum illo!</p>
            </div>
        </section>

        <hr>
        <?php include "footer.php"; ?>
    </div>
    
</body>
</html>