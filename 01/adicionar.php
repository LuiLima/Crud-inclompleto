<?php
//Inclusão do header
include_once ("includes/mensagem.php");
include_once 'includes/header.php'
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo clientes </h3>
		<?php
		$dado = filter_input_array(INPUT_POST, FILTER_DEFAULT);
				
		?>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" placeholder="Nome Completo">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="idade" id="idade" placeholder="Ex: 32">
				<label for="idade">Idade</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="telefone" id="telefone" placeholder="Ex: 41999999999">
				<label for="telefone">Telefone</label>
			</div>

			<button type="submit" nome="btn-cadastrar" class="btn">Cadastrar</button>
			<td><a href="index.php" nome="btn-lista" class="btn green">Lista de clientes</td>

		</form>

	</div>
</div>


<?php
//Inclusão do fotter
include_once 'includes/footer.php'
?>