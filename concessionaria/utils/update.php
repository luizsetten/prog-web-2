<?php include "./utils/mysql_connect.php"; ?>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
        $idUpdate = $_POST['id'];
        $queryDelete = sprintf("UPDATE FROM carros SET marca={$_POST['marca']} modelo={$_POST['modelo']} ano={$_POST['ano']} preco={$_POST['preco']} cor={$_POST['cor']} descricao={$_POST['descricao']} foto={$_POST['foto']}  WHERE id=$idUpdate");
        $removed = mysqli_query($con, $queryDelete) or die(mysqli_error($con));
}
header("Location: http://localhost/exemplos/concessionaria/listagem.php");
die();

// $id = $_POST['id'];
// echo $id;
// $query = sprintf("SELECT * FROM carros WHERE id=$id");
// $dados = mysqli_query($con, $query) or die(mysqli_error($con));
// echo '<pre>';
// print_r($dados);
// echo '</pre>';
// $teste = mysqli_fetch_object($dados);
// echo '<pre>';
// print_r($teste);
// echo '</pre>';
// echo $teste->preco;

?>