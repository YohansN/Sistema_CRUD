<?php
include 'conexao.php';

//Recebendo os dados de input do usuário.
$id = $_POST['id'];

//Comando para deleção dos dados na tabela sql.
$excluir_cadastro = "DELETE FROM clientes WHERE id = '$id'";

//Validando a deleção.
$query_cadastro = mysqli_query($connection, $excluir_cadastro) or die(mysqli_error($connection));

//Voltando para a página anterior(listagem):
header('location: listagem.php');

?>