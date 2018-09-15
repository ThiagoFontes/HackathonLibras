<?php
	header("Content-type: text/plain; charset=utf-8");
	require_once('db.php');

	$search = $_GET['search'];
	
	$db = new DB();
	$result = $db->searchSinais($search);
?>