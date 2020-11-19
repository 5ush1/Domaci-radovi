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
	<nav class="col-12 bg-dark d-flex flex-wrap">
		<h2 class="col-12 col-lg-9 text-white text-center text-lg-left">Domaci rad</h2>
		<div class="col-12 col-lg-3 d-flex h-100 align-self-center">
			<a href="<?= $linkovi["Home"]; ?>" class="ml-3 text-white">Home</a>
			<a href="<?= $linkovi["About"]; ?>" class="ml-3 text-white">About</a>
			<a href="<?= $linkovi["Contact"]; ?>" class="ml-3 text-white">Contact</a>
			<a href="<?= $linkovi["Products"]; ?>" class="ml-3 text-white">Products</a>
		</div>
	</nav>
	<?php require_once 'Templates/header.php';?>
	<header class="background-img height-header col-12 d-flex flex-column justify-content-center align-items-center">
		<h2><?= $fotelja["specijalnaPonuda"]?></h2>
		<h2><?= $fotelja["ime"]?></h2>
		<h3><?= $fotelja["cena"]?></h3>
	</header>
</body>
</html>