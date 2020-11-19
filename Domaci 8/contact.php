<?php 
	require_once 'logika.php';
	require_once 'Src/radno-vreme.php';
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
	<section>
		<article>
			<h2 class="text-center col-12">Kontakt</h2>
			<div class="d-flex">
				<div class="col-3">
					<h4><?= $kontakt1["imePrezime"]?></h4>
					<p><b>Email:</b> <?= $kontakt1["email"]?></p>
					<p><b>Kontakt telefon:</b> <?= $kontakt1["telefon"]?></p>
				</div>
				<div class="col-3">
					<h4><?= $kontakt2["imePrezime"]?></h4>
					<p><b>Email:</b> <?= $kontakt2["email"]?></p>
					<p><b>Kontakt telefon:</b> <?= $kontakt2["telefon"]?></p>
				</div>
			</div>
		</article>
		<article>
			<h2>Radno vreme</h2>
				<?php if(in_array($danasnjiDan, RADNI_DAN)): ?>
					<h3>Danas radimo od 07h do 20h</h3>
				<?php elseif($danasnjiDan == "Saturday"): ?>
					<h3>Danas radimo od 08h do 16h</h3>
				<?php else: ?>
					<h3>Danas ne radimo</h3>
				<?php endif ?>
			<ul>
				<li>Ponedeljak: <?= $radnoVreme["Monday"]?></li>
				<li>Utorak: <?= $radnoVreme["Tuesday"]?></li>
				<li>Sreda: <?= $radnoVreme["Wednesday"]?></li>
				<li>Cetvrtak: <?= $radnoVreme["Thursday"]?></li>
				<li>Petak: <?= $radnoVreme["Friday"]?></li>
				<li>Subota: <?= $radnoVreme["Saturday"]?></li>
				<li>Nedelja: <?= $radnoVreme["Sunday"]?></li>
			</ul>
		</article>
	</section>
</body>
</html>