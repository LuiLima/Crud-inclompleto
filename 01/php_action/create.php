<<?php 

session_start();
/*include_once ("includes/mensagem.php");
include("dbconnect.php");

	$nome=$_POST['nome'];
	$idade=$_POST['idade'];
	$telefone=$_POST['telefone'];


	$sql= "INSERT INTO dados(nome, idade, telefone) VALUES ('$nome', '$idade', '$telefone')";
	$biscoito= $connect->prepare($sql);
	$biscoito->bindParam('nome',$nome);
	$biscoito->bindParam('idade',$idade);
	$biscoito->bindParam('telefone',$telefone);
		
	if($biscoito->execute()) {
		echo "Usuario Cadastrado com sucesso!";
	}else{
		echo "Erro ao cadastrar!";
	}
	//header('location: ../adicionar.php');
	header('location: ../index.php');
*/



	if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        if ($id != "") {
            $stmt = $connect->prepare("UPDATE contatos SET nome=?, idade=?, telefone=? WHERE id = ?");
            $stmt->bindParam(4, $id);
        } else {
            $stmt = $connect->prepare("INSERT INTO contatos (nome, idade, telefone) VALUES (?, ?, ?)");
        }
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $idade);
        $stmt->bindParam(3, $telefone);
 
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $id = null;
                $nome = null;
                $email = null;
                $celular = null;
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();

        header('location: ../index.php');
    }
}