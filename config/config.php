<?php

//For Localhost: Enable This
// $databaseHost = '127.0.0.1';
// $databaseName = 'bsuepayslip';
// $databaseUsername = 'root';
// $databasePassword = '';

//For Online Database Use this
$databaseHost = 'mysql.hostinger.ph';
$databaseName = 'u705273519_epays';
$databaseUsername = 'u705273519_epays';
$databasePassword = 'Incorrect57';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$conn)
	{
		die("Could not connect" . mysqli_connect_error());
	}
?>