<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>
	<form action="Src/registered.php" method="POST" class="col-4">
		<div class="form-group">
			<label for="imePrezime">Ime i Prezime</label>
			<input class="form-control" type="text" name="imePrezime" id="imePrezime" required>
		</div>
		<div class="form-group">
			<label for="username">username</label>
			<input class="form-control" type="username" name="username" id="username" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" type="password" name="password" id="password" required>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control" type="email" name="email" id="email" required>
		</div>
		<input class="btn btn-primary" type="submit" name="Register">
	</form>
</body>
</html>