<?php 
//Header
include_once "includes/header.php";
//Conexão com o db
include_once "php_action/db_connect.php";
//Mensagem de confirmação de cadastro
include_once "includes/message.php";
?>

<div class="row">
	<div class="col s12 m8 push-m2">
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

				if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo ucwords($dados['nome']); ?></td>
					<td><?php echo ucwords($dados['sobrenome']); ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['idade']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id'];?>" 
						class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id'];?>" class="modal">
					    <div class="modal-content">
					      <h5>Opa! Tem certeza que deseja excluir esse cliente?</h5>
					    </div>
					    <div class="modal-footer">
					      
					      <form action="php_action/delete.php" method="post">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

					      	<button type="submit" name="btn-deletar" class="btn red">Sim! Quero deletar</button>
					      	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
					      </form>

					    </div>
					  </div>
				</tr>
				<?php 
				endwhile;
				?>
			<?php ?>
			</tbody>
			<?php
			else: 
			?>
			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
			</tr>

			<?php	 
			endif;
			?>
		</table>	
		<br>
		<a href="adicionar.php" class="btn">Adicionar Cliente</a>
	</div>
</div>

<?php
//Footer
include_once "includes/footer.php";
?>






