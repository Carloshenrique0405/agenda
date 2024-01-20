<?php 
//Definicao das variaveis de conexao
$hostname = "localhost";
$username = "root";
$password = "gti@2023";
$database = "agenda";
// Tentativa de conexao 
$conexao = mysqli_connect($hostname, $username, $password, $database);
//verificacao da conexao 
if ($conexao) {
	//conexao bem sucedida
	echo "Conexão Bem-sucedida!";
}else{
	//Erro na conexao
	echo "Erro na Conexao: ".mysqli_connect_error();
}
// Fechamento da conexao
mysqli_close($conexao);
?>

