<?php
	$host="localhost";
	$uname="root";
	$passwd="";
	$db="UserPHP";
	$conn = new mysqli($host, $uname, $passwd, $db);
	// Check connection
	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
}
?>

