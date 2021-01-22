<?php include "./mysql_connect.php"; ?>

<?php

// $id = $_POST['id'];
print "<pre>";
print_r($_POST);
print "</pre>";
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];
$foto = $_POST['foto'];
$cor = $_POST['cor'];
$descricao = $_POST['descricao'];
// $preco = floatval($_POST['preco']);
// $query2 = sprintf("INSERT INTO carros (marca, modelo, ano, preco, foto, cor, descricao) VALUES ('Chevrolet', 'Onix', 2018, 45000.00, 'teste.png', 'Branco', 'Muito top')");
$query = sprintf("INSERT INTO carros (marca, modelo, ano, preco, foto, cor, descricao) VALUES (\"{$marca}\", \"{$modelo}\", {$ano}, {$preco}, \"{$foto}\", \"{$cor}\", \"{$descricao}\")");
$updated = mysqli_query($con, $query) or die(mysqli_error($con));
print($updated);

header("Location: ../listagem.php");
die();
?>