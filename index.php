<?php 
//Header
include_once "includes/header.php";
//Conexão com o db
include_once "php_action/db_connect.php";
//Mensagem de confirmação de cadastro
include_once "includes/message.php";
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Clientes</h3>
		<table class="striped">
			<thead>
			<tr>				
				<th>Nome: </th>
				<th>Sobrenome:</th>
				<th>Email:</th>
				<th>Idade:</th>			
			</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM clientes ORDER BY nome";
				$resultado = mysqli_query($connect, $sql);
				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo ucwords($dados['nome']); ?></td>
					<td><?php echo ucwords($dados['sobrenome']); ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['idade']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id'];?>" 
						class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					<td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
				</tr>
			</tbody>
				<?php endwhile; ?>
		</table>	
		<br>
		<a href="adicionar.php" class="btn">Adicionar Cliente</a>
	</div>
</div>

<?php
//Footer
include_once "includes/footer.php";
?>






