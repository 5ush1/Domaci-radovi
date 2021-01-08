<?php 

require_once 'sql.php';
$username = $_POST["usrname"];
$password = $_POST["password"];
sqlConnect();
login($username, $password);
header("Location: /Domaci 11/index.php?sesija=1");