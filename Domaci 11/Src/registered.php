<?php 

if (!isset($_POST["Register"])) {
	header("Location: /Domaci_11/login.php");
}
$username = $_POST["username"];
$imePrezime = $_POST["imePrezime"];
$password = $_POST["password"];
$email = $_POST["email"];

sqlConnect();
register($username, $imePrezime, $password, $email, $sql);
header("Location: /Domaci_11/login.php");