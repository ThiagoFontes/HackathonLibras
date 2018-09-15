<?php
	header("Content-type: text/plain; charset=utf-8");
	require_once('db.php');

	$db = new DB();
	$pt_title = $_GET['pt_title'];
	$db->getSinal($pt_title);

?>