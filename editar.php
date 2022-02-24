<?php
include 'conexao.php';

//Recebendo os dados de input do usuário.
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

//Comando para alteraração dos dados na tabela sql.
$editar_cadastros = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = '$id'";

//Validando a alteração.
$query_cadastros = mysqli_query($connection, $editar_cadastros) or die(mysqli_error($connection));

//Volta para a página anterior (listagem):
header('location: listagem.php');

?>