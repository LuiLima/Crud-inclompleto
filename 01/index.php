<?php
include_once ("includes/mensagem.php");
//Conexão com o bando de dados
include_once ("php_action/dbconnect.php");
//Inclusão do header
include_once 'includes/header.php'
//Conexão com o bando de dados

?>
		<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th> </th>
					<th>Nome:</th>
					<th>Idade:</th>
					<th>Telefone:</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$sql = "SELECT * FROM dados";
					$result =$connect->query($sql);
					$biscoito = $result->fetchAll( PDO::FETCH_ASSOC );

				if (count($biscoito) === 0 ) {
    				echo "teste";
						}
				else {
    					foreach($biscoito as $teste1) {
        				?>
        			<tr>
        				<td><?php $teste1['id'];?></td>
						<td><?php echo $teste1['nome'];?></td>
						<td><?php echo $teste1['idade']; ?></td>
						<td><?php echo $teste1['telefone']; ?></td>

					<td><a href="editar.php?id<?php echo $teste1['id'];?>" name= "edit" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="index.php?q<?php echo $teste1['id'];?>" name= "delete" class="btn-floating red"><i class="material-icons">delete</i></a></td>
					</tr>
					<?php
					}
					}	
					?>
					
			</tbody>
		</table>
		<br>
		<a href="adicionar.php"class="btn">Adicionar cliente</a>
	</div>
</div>

		<?php
		if(isset($_GET['q'])){
				$id = $_GET['q'];

				$sql = "DELETE FROM dados WHERE id = ':id'";
				$biscoito = $connect->prepare($sql);
				$biscoito->bindParam(':id', $id);
				$result = $biscoito->execute();

				if(!result) {
					var_dump($biscoito->erroInfo());
					exit;
				}else{
					echo $biscoito->rowCount(). "Linha deletada!";
				}
			}
		?>