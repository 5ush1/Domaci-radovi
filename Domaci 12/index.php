<?php 

	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 </head>
 <body>
 	<h1>Prijavite se</h1>
 	<form action="loggedin.php" method="POST">
 		<div class="form-group">
 			<label for="username">Username</label>
 			<input class="form-control" type="username" name="username" id="username">
 		</div> 
 		<div class="form-group">
 			<label for="password">Password</label>
 			<input class="form-control" type="password" name="password" id="password">
 		</div>
 		<button class="btn btn-primary" name="login">Prijavi se</button>
 	</form>
 	<a href="register.php"><button class="btn btn primary">Registruj se</button></a>
 </body>
 </html>