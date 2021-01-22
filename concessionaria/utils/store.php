<?php include "./mysql_connect.php"; ?>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $preco = $_POST['preco'];
        $foto = $_POST['foto'];
        $cor = $_POST['cor'];
        $descricao = $_POST['descricao'];
        print($_POST['preco']);
        // $preco = floatval($_POST['preco']);
        $query = sprintf("INSERT INTO carros (id, marca, modelo, ano, preco, foto, cor, descricao) VALUES ({$id}, {$marca}, {$modelo}, {$ano}, {$preco}, {$foto}, {$cor}, {$descricao})");
        // $queryUpdate = sprintf("UPDATE carros SET marca=\"{$_POST['marca']}\", modelo=\"{$_POST['modelo']}\", ano=\"{$_POST['ano']}\", preco=\"{$_POST['preco']}\", cor=\"{$_POST['cor']}\", descricao=\"{$_POST['descricao']}\", foto=\"{$_POST['foto']}\"  WHERE id=$idUpdate");
        $updated = mysqli_query($con, $query) or die(mysqli_error($con));
}
header("Location: ../listagem.php");
die();
?>