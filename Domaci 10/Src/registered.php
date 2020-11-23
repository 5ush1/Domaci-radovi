<?php 
session_start();
$sql = mysqli_connect("localhost", "root", "", "Domaci_10");
$username = $_POST["username"];
$imePrezime = $_POST["imePrezime"];
$password = $_POST["password"];
$email = $_POST["email"];
$sql->query("INSERT INTO `users` (`username`, `ime_prezime`, `password`, `email`) VALUES ('$username', '$imePrezime', '$password', '$email');");
header("Location: /Domaci radovi/Domaci 10/index.php?poruka=Pokreni sesiju");