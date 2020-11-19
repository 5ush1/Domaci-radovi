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


?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>
	<h1 class="text-center">Cart</h1>
	<section>
		<article>
			<?php if(poruka($_GET)): ?>
				<div class="col-3 div-proizvod mb-5 d-flex flex-column">
						<div class="text-center">
							<img src="<?php odstampajSliku($_GET,$proizvodi); ?>" class="slika rounded img-thumbnail">
						</div>
						<h5 class="m-0 text-center"><?= $_GET["poruka"] ?></h5>
						<p class="m-0 text-center"><?= $_GET["cena"]  ?></p>
				</div>
			<?php endif; ?>
		</article>
	</section>
</body>
</html> -->