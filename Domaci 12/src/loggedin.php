<?php 
	
	require_once 'User.php';
	require_once 'session.php';

	$username = $_POST["username"];
	$password = $_POST["password"];

	if (isset($_POST["login"])) {
		startSql();
		insertSql($username, $password, $email);
		startSession();
		header("Location: /Domaci 12/home.php");
	}else{
		header("Locatoin: /Domaci 12/index.php");
	}

	