<?php 


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Register</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 </head>
 <body>
 	<h1>Prijavite se</h1>
 	<form action="src/registered.php" method="POST">
 		<div class="form-group">
 			<label for="username">Username</label>
 			<input class="form-control" type="username" name="username" id="username">
 		</div> 
 		<div class="form-group">
 			<label for="password">Password</label>
 			<input class="form-control" type="password" name="password" id="password">
 		</div>
 		 		<div class="form-group">
 			<label for="email">Email</label>
 			<input class="form-control" type="email" name="email" id="email">
 		</div>
 		<button class="btn btn-primary" name="register">Registruj se</button>
 	</form>
 </body>
 </html>