<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$dsn = 'mysql:dbname=laravel_db;host=localhost;charset=utf8';
$user = 'root';
$password = 'EFR9sbniJ7A7';
try {
	$dbh = new PDO($dsn, $user, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'DB Connected.';
} catch (PDOException $e) {
	print('Connection Failed:'.$e->getMessage());
	die();
}
?>
</body>
</html>
