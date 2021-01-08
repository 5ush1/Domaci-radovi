<?php 
	require_once 'session.php';
function sqlConnect()
{
	$sql = mysqli_connect("localhost", "root", "", "Domaci_11");
}

function register(string $username, string $imePrezime, string $password, string $email): void
{
	$sql = sqlConnect();
	passHash($password);
	$sql->query("INSERT INTO `users` (`username`, `ime_prezime`, `password`, `email`) VALUES ('$username', '$imePrezime', '$password', '$email');");
}
function passHash($password)
{
	$password = password_hash($password, PASSWORD_BCRYPT);
}
function login($username, $password)
{
	$sql = sqlConnect();
	$rezultat = $sql->query("SELECT * WHERE username = '$usrname'");
	if ($rezultat->num_rows < 1) {
		echo "Pogresno korisnicko ime";
		die();
	}
	$data = $rezultat->fetch_array();
	if (!password_verify($password, $data["password"])) {
		echo "Pogresna lozinka";
		die();
	}
	setSessionData($id, $data["id"]);
}
function order(string $imePrezime, $prizvodi, int $cena)
{
	$sql = sqlConnect();
	$sql->query("INSERT INTO porudzbine (ime_prezime, proizvodi, cena) VALUES ('$imePrezime', '$proizvodi', '$cena')");
}