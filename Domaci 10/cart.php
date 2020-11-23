<?php  
 
require_once 'logika.php';
require_once 'Src/session.php';




if (!poruka($_GET)) {
	header("Location: index.php");
}

if (sessionKeyExists("proizvod")) {
	echo "Ne mozete dodati vise od jednog proizvoda";
}

// setSessionData("proizvod", $_GET["poruka"]);
addToSession("proizvodi", $_GET["poruka"]);
header("Location: checkout.php");

function poruka($get)
{
	if (!isset($get["poruka"])) {
		return false;
	}
	return true;
}

// upisivati podatke u bazu
//user id napraviti i upisati ko je korisnik
//napraviti registraciju
?>
