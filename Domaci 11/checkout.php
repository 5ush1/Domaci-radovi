<?php  

require_once 'Src/session.php';
require_once 'logika.php';


function price($proizvodi, $proizvodS)
{
	foreach ($proizvodi as $proizvod) {
		if ( in_array($proizvodS, $proizvod)) {
			return $proizvod["cena"];
		}
	}
}
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
	<h1 class="text-center">Cart</h1>
	<h2>Izabrani proizvodi</h2>
	<table border="solid 2px black">
		<?php $ukupnaCena = 0; foreach(getValues("proizvodi") as $proizvod): ?>
				<tr>
					<td><?= $proizvod; ?></td>
					<td><?= price($proizvodi, $proizvod); ?></td>
				</tr>
				<?php $ukupnaCena += price($proizvodi, $proizvod);?>
				<?php $proizvodi = $proizvodi . ", " . $proizvod; ?>
		<?php endforeach; ?>
	</table>
	<p>Ukupna cena je <?= $ukupnaCena; ?></p>
		<form action="instruction.php" method="POST">
			<div class="form-group col-2">
				<label for="imePrezime">Upisite Ime i Prezime</label>
				<input class="form-control" type="text" name="imePrezime" id="imePrezime">
			</div>
		</form>
		<a href="Src/order.php"><button>Poruci</button></a>
</body>
</html>