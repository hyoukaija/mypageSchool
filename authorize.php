<?php
$username = "fenghai";
$password = "19910810";
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] == $username) || ($_SERVER['PHP_AUTH_PW'] == $password)) {
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate: Basic reaml="My Homepage"');
	exit('<h2>Welcome to My homepage!<h2>Please contact me in Email!<br>bigblbufly@gmail.com');
}
?>