<?php 

	require_once 'src/Product.php';

	stolica();
	sto();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pocetna</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="d-flex bg-dark">
			<h1 class="col-7">TafelMax</h1>
			<div class="col-5 d-flex">
				<a href="home.php">Pocetna</a>
				<a href="cart.php">Korpa</a>
				<a href="orders.php">Porudzbine</a>
			</div>
		</nav>
	</header>
	<main>
		<section>
			<article>
				<h2><?= $stoName; ?></h2>
				<h3><?= $stoPrice?></h3>
			</article>
			<article>
				<h2></h2>
				<h3></h3>
			</article>
		</section>
	</main>
</body>
</html>