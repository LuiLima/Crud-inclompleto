<?php
//include_once ("includes/mensagem.php");
include_once ("php_action/dbconnect.php");
include_once 'includes/header.php'
?>
<?php
	if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {
    try {
        $sql = "SELECT * FROM dados";
					$result =$connect->query($sql);
					$biscoito = $result->fetchAll( PDO::FETCH_ASSOC );

				if (count($biscoito) === 0 ) {
    				echo "teste";
						}
				else {
    					foreach($biscoito as $teste1) {
        echo "Erro: ".$erro->getMessage();
    }
}
        		?>
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="php_action/update.php" method="POST">

			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $teste1['nome']?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $teste1['idade']?>" name="idade" id="idade" >
				<label for="idade">Idade</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $teste1['telefone']?>" name="telefone" id="telefone" >
				<label for="telefone">Telefone</label>
			</div>

			<button type="submit" nome="btn-editar" class="btn">Atualizar</button>
			<a href="index.php" class="btn green">Lista de clientes</button>

		</form>

	</div>
</div>


<?php
//Inclusão do fotter
include_once 'includes/footer.php'
?>