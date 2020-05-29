<html>
	<head>
		<title>Strategy Pattern</title>
		<style>
			h4{  border-bottom:1px solid; padding-bottom:5px; display:inline;}
		</style>
	</head>
	<body>
		<h3>Hashing data using Strategy Pattern</h3>
<?php

use Pattern\Behavioral\Strategy\Classes\Strategy;
use Pattern\Behavioral\Strategy\Classes\MD5;
use Pattern\Behavioral\Strategy\Classes\BCrypt;
use Pattern\Behavioral\Strategy\Classes\HMAC;

$data = 'Hash me with MD5';
$algo = new MD5();
$hash = Strategy::initialize($data, $algo)->generateHash()->getHash();

echo "<h4>MD5</h4>
		<p>
			<strong>Data:</strong>{$data}<br>
			<strong>Hash:</strong>{$hash}</p><hr>";
?>
	</body>
</html>