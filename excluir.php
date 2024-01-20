<?php
//incluir o arquivo de configuração
include("config.php");

//obter os dados do formulário

$id = $_POST["id_contato"];

//exluir o novo registro

$sql = "DELETE FROM contatos WHERE id_contato = $id";

$resultado = mysqli_query($conexao, $sql);

//verificar se o registro foi deletado com sucesso

if ($resultado) {
	
	echo "Registro deletado com sucesso!";
	} else {
		
		echo "Erro ao deletar o registro!";
	}
// Fechar a conexão com banco de dados
mysqli_close($conexao);

?>