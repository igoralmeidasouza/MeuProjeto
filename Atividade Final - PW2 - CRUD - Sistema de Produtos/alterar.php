<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbprodutos WHERE IdProd = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Dados do Produto</h3>
			
			<form action="php_action/alterar_produtos.php" method="POST">

				<input type="hidden" name = "idproduto" value="<?php echo $dados['IdProd']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="produto" id="produto" 
					value="<?php echo $dados['nomeProd']; ?>">
					<label for="produto">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>">
					<label for="descricao">Descrição</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marca" id="marca" value="<?php echo $dados['marca']; ?>">
					<label for="marca">Marca</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco" value="<?php echo $dados['preco']; ?>">
					<label for="preco">Preço</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>