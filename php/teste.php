<!DOCTYPE html>
<html>
<head>
	<title>Testes</title>
</head>
<body>
	<h3>Criar Usuários<h3>
	
	<?php
		require_once('db.php');
		
		$db = new DB();

		echo "<h3>Listar usuários</h3>";
		
		$db->listUsers();
		
		echo "<h3>Listar usuários</h3>";

    	$db->listSinais();

	    echo "<h3>Recupera Sinal</h3>";

    	$db->getSinal('sinal');
	?>
</body>
</html>