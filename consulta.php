<?php
//chamada para estabeler a conexao com o banco
require_once "config.php";

$sql = "SELECT * FROM contatos";
$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista contatos</title>
</head>
<body>

  <table class="table">
    <thead>
      <tr>
        <th>Código</th>
		<th>Nome</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <tbody>
      <?php
//consultei a tabela para carregar os dados na grid
      foreach ($result as $row) {
        echo "<tr>";
		echo "<td>{$row['id_contato']}</td>";
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['tel1']}</td>";
        echo "</tr>";
      }
//fechei a conexao
      mysqli_close($conexao);

      ?>
    </tbody>
  </table>

</body>
</html>