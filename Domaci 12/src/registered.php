<?php 
	
	require_once 'User.php';
	require_once 'session.php';

	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];


	if (!isset($_POST["register"])) {
		header("Location: ../index.php");
	}


	register($username, $password, $email);

	header("Location: ../home.php");
