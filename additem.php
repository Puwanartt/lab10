<?php
$servername = "localhost";
$username = "it58160188";
$password = "it58160188";
$dbname = "it58160188";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->query("SET NAMES UTF8");

$item = $_GET['item'];

$sql = "INSERT INTO shoppinglist(item) VALUES('$item')";
$conn->query($sql);

$conn->close();

header("location: getall.php");