<?php 

if (!dugme($_GET)) {
	header("Location: index.php");
}

function dugme($get)
{
	if (!isset($get["dugme"])) {
		return false;
	}
	return true;
}

if (!izbor($_GET)) {
	header("LOcation: index.php?poruka=Niste izabrali nista");
}

if (staJeNarucio($_GET) == "Stolice") {
	header("Location: cestitam.php?poruka=Cestiamo narucili ste stolicu");
}elseif(staJeNarucio($_GET) == "Stolovi"){
	header("Location: cestitam.php?poruka=Cestitamo narucili ste sto");
}else{
	header("Location: cestitam.php?poruka=Cestitamo narucili ste policu");
}

function izbor($get)
{
	if (($get["izbor"] == "Izaberite")) {
		return false;
	}
	return true;
}
function staJeNarucio($get)
{
	if ($get["izbor"] == "Stolice") {
		return "Stolice";
	}elseif($get["izbor"] == "Stolovi"){
		return "Stolovi";
	}
	return "Police";
}