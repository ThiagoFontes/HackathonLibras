<?php
	require_once('db.php');
	$db = new DB();
	$result = $db->listSinais();
?>