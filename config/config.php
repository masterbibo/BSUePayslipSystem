<?php

$databaseHost = '127.0.0.1';
$databaseName = 'bsuepayslip';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$conn)
	{
		die("Could not connect" . mysqli_connect_error());
	}
?>