<!DOCTYPE html>
<html>
<head>
	<title>Testes</title>
</head>
<body>
	<h3>Criar Usuários<h3>
	<h3>Listar usuários</h3>
	<?php
		require_once('db.php');
		$db = new DB();
		$result = $db->listUsers();
		while($row = $result->fetchArray()) {
	 	  echo $row['username'] . '<br>';
      echo $row['email'] . '<br>';
    }
    $db->listSinais();
	?>
</body>
</html>