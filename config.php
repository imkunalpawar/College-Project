<?php
define('DB_NAME', 'tg_report');
$servername = "localhost";
$username = "mohit";
$password = "mohit12345";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$db_selected = mysqli_select_db($conn, DB_NAME);
if (!$db_selected){
	die('can\;t use ' . DB_NAME . ':' . mysqli_connect_error());
}
echo "Connected successfully";
?>