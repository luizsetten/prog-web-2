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
// $foto = $_POST['foto'];
$cor = $_POST['cor'];
$descricao = $_POST['descricao'];
$imagem = $_FILES['foto'];
// print "<pre>";
// print_r($imagem);
// print "</pre>";
if ($imagem != NULL) {
  $nomeFinal = 'uploads/' . time() . '.jpg';
  if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
    $tamanhoImg = filesize($nomeFinal);
    $foto2 = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
    print "<pre>";
    print_r($foto2);
    print "</pre>";
    $query = sprintf("INSERT INTO carros (marca, modelo, ano, preco, cor, descricao, foto) VALUES (\"{$marca}\", \"{$modelo}\", {$ano}, {$preco}, \"{$cor}\", \"{$descricao}\", \"{$foto2}\")");
    $updated = mysqli_query($con, $query) or die(mysqli_error($con));
  }
} else {
  echo "Você não realizou o upload de forma satisfatória.";
}
print($updated);

header("Location: ../listagem.php");
die();
?>