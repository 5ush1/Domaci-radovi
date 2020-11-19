<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="logika.php">
		<select name="izbor">
			<option>Izaberite</option>
			<option>Stolice</option>
			<option>Stolovi</option>
			<option>Police</option>
		</select>
		<input type="submit" name="dugme">
	</form>
	<?php if(isset($_GET["poruka"])): ?>
		<h1>Niste izabrali nista</h1>
	<?php endif; ?>
</body>
</html>