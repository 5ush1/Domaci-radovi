<?php 
	require_once 'Src/config.php';
	require_once 'checkout.php';
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
	<form class="d-flex flex-wrap">
		<div class="form-group col-6">
			<label for="platilac">Platilac</label>
			<input readonly type="text" id="platilac" class="col-12 form-control">
		</div>
		<div class="form-group col-2">
			<label for="sifraPlacanja">Sifra Placanja</label>
			<input readonly type="text" id="sifraPlacanja" class="col-12 form-control" value="<?= SIFRA_PLACANJA ?>">
		</div>
		<div class="form-group col-2">
			<label for="valuta">Valuta</label>
			<input readonly type="text" id="valuta" class="col-12 form-control" value="<?= VALUTA ?>">
		</div>
		<div class="form-group col-2">
			<label for="iznos">Iznos</label>
			<input readonly type="text" id="iznos" class="col-12 form-control" value="=<?= $ukupnaCena ?>,00">
		</div>
		<br>
		<div class="form-group col-6">
			<label for="svrhaUplate">Svrha Uplate</label>
			<input readonly type="text" id="svrhaUplate" class="col-12 form-control" value="<?= SVRHA_UPLATE ?>">
		</div>
		<div class="form-group col-6">
			<label for="racunPrimaoca">Racun Primaoca</label>
			<input readonly type="text" id="racunPrimaoca" class="col-12 form-control" value="<?= RACUN_PRIMAOCA ?>">
		</div>
		<br>
		<div class="form-group col-6">
			<label for="primalac">Primalac</label>
			<input readonly type="text" id="primalac" class="col-12 form-control" value="<?= PRIMALAC ?>">
		</div>
		<div class="form-group col-2">
			<label for="model">Model</label>
			<input readonly type="text" id="model" class="col-12 form-control">
		</div>
		<div class="form-group col-4">
			<label for="pozivNaBroj" class="form-group">Poziv na broj</label>
			<input readonly type="text" id="pozivNaBroj" class="col-12 form-control">
		</div>
		
	</form>
</body>
</html>