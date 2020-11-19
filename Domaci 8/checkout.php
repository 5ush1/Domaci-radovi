<?php 

require_once 'Src/session.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php foreach(getValues("proizvodi") as $proizvod):?>
			<li><?= $proizvod; ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>