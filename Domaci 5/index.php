<?php 
	require_once 'logika.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>
	<nav class="col-12 bg-dark d-flex">
		<h2 class="col-9 text-white">Domaci rad</h2>
		<div class="col-3 d-flex h-100 align-self-center">
			<a href="<?= $linkovi["Home"]; ?>" class="ml-3 text-white">Home</a>
			<a href="<?= $linkovi["About"]; ?>" class="ml-3 text-white">About</a>
			<a href="<?= $linkovi["Contact"]; ?>" class="ml-3 text-white">Contact</a>
			<a href="<?= $linkovi["Products"]; ?>" class="ml-3 text-white">Products</a>
		</div>
	</nav>
</body>
</html>