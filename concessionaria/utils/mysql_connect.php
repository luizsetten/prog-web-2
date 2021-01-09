<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "concessionaria";
$user = "root";
$pass = "password";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
// print "Conectou!!";
// cria a instrução SQL que vai selecionar os dados

$query = sprintf("SELECT * FROM carros"); //Não retorna nada pq o banco ta vazio

// executa a query

$dados = mysqli_query($con, $query) or die(mysqli_error($con));
// // transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// // calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

print($total); // Fazer um for com o total para iterar na tela de listagem

?>