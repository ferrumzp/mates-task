<?php
	// Connection detailes 
	$username = "root"; // MySQL user name
	$password = "root"; // MySQL user pass
	$hostname = "localhost"; // Host

try {
	$conn = new PDO("mysql:host=$hostname;", $username,$password);
	$sql = "CREATE DATABASE IF NOT EXIST dimtesttask"; // Base name to create
	$conn->exec($sql);
} 
catch (PDOException $e) {
	echo $sql . $e->getMessage();
}
?>