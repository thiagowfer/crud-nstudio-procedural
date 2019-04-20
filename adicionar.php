<?php 
//Header
include_once "includes/header.php";
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Novo Cliente</h3>
		<form action="">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>
			<button class="btn" type="submit">Cadastrar</button>
			<button class="btn green" type="submit">Lista de Clientes</button>
		</form>
	</div>
</div>

<?php
//Footer
include_once "includes/footer.php";
?>





