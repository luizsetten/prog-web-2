<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "concessionaria";
$user = "root";
$pass = "password";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
print "Conectou!!";
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT identificador, nome, telefone FROM cadastro");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);

?>