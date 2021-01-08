<?php 

require_once 'logika.php';




if (!dugme($_GET)) {
	header("Location: index.php");
	
}
foreach ($proizvodi as $proizvod) {

	if ($_GET["dugme"] == $proizvod["ime"]) {
		header("Location: cart.php?poruka=$_GET[dugme]&cena=$proizvod[cena]");

	}
}

function dugme($get)
{
	if (!isset($get["dugme"])) {
		return false;
	}
	return true;
}