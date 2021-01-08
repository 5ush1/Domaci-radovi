<?php 


	function startSql(){
		return mysqli_connect("localhost", "root", "", "Domaci_12");
	}

	function register($username, $password, $email){
		$sql = startSql();
		$sql->query("INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')");
	}

	function getUser($username){
		startSql();
		$sql->query("SELECT username FROM users WHERE username = $username");
	}

	function getPass($password){
		startSql();
		$sql->query("SELECT password FROM users WHERE password = $password");
	}