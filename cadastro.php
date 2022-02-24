<?php
include 'conexao.php';

//Recebendo os dados de input do usuário.
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

//Comando para inserção dos dados na tabela sql.
$receber_cadastros = "INSERT INTO clientes VALUES (DEFAULT, '$nome', '$email', '$telefone')";

//Validando a inserção.
$query_cadastros = mysqli_query($connection, $receber_cadastros) or die(mysqli_error($connection));

//Volta para a página anterior (listagem):
header('location: listagem.php');

?>