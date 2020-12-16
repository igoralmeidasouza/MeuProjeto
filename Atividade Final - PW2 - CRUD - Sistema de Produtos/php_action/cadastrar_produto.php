<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$produto = mysqli_escape_string($connection,$_POST['produto']);
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);
		$marca = mysqli_escape_string($connection,$_POST['marca']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);

		$sql = "INSERT INTO tbprodutos(nomeProd,descricao,marca,preco)VALUES('$produto','$descricao','$marca','$preco')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
