<?php include "./mysql_connect.php"; ?>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
        $idUpdate = $_POST['id'];
        $queryUpdate = sprintf("UPDATE carros SET marca=\"{$_POST['marca']}\", modelo=\"{$_POST['modelo']}\", ano=\"{$_POST['ano']}\", preco=\"{$_POST['preco']}\", cor=\"{$_POST['cor']}\", descricao=\"{$_POST['descricao']}\", foto=\"{$_POST['foto']}\"  WHERE id=$idUpdate");
        $updated = mysqli_query($con, $queryUpdate) or die(mysqli_error($con));
}
header("Location: ../listagem.php");
die();
?>