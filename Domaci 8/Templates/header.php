<?php

	define("VIKEND", ["Saturday", "Sunday"]);
	
	$dan = date("l");

	if (in_array($dan, VIKEND)) {
		require_once 'Src/special-offer.php';
	}else{
		require_once 'Src/regular-offer.php';
	}