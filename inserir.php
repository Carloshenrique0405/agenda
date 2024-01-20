<?php

//incluir o arquivo de configuração
include("config.php");

//obter os dados do formulário

$nome = $_POST["nome"];
$tel1 = $_POST["tel1"];

//inserir o novo registro

$sql = "INSERT INTO contatos (nome,tel1) VALUES ('$nome', '$tel1')";

$resultado = mysqli_query($conexao, $sql);

//verificar se o registro foi inserido com sucesso

if ($resultado) {
	
	echo "Registro inserido com sucesso!";
	} else {
		
		echo "Erro ao inserir o registro!";
	}
// Fechar a conexão com banco de dados
mysqli_close($conexao);

?>