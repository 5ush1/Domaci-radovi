<?php 

	require_once 'User.php';

	function stolica(){
		$sql = mysqli_connect("localhost", "root", "", "Cas_12");

	$proizvodi = $sql->query("SELECT * FROM products WHERE name = stolica");

	while ($reduBazi = $proizvodi->fetch_assoc()) {
		echo $reduBazi["ime"];
}
	}

	
