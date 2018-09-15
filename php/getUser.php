<?php
	header("Content-type: text/plain; charset=utf-8");
	require_once('db.php');

	$db = new DB();
	$username = $_GET['username'];
	$db->getUser($username);	
?>