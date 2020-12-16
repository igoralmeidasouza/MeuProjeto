<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$produto = mysqli_escape_string($connection,$_POST['produto']);
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);
		$marca = mysqli_escape_string($connection,$_POST['marca']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);
		$Idprod = mysqli_escape_string($connection,$_POST['idproduto']);

		$sql = "UPDATE tbprodutos SET nomeProd = '$produto', descricao = '$descricao', marca = '$marca', preco = '$preco' WHERE IdProd = '$Idprod'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
