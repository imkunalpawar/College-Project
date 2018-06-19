<?php


define('DB_NAME', 'tg_report');
define('DB_USER', 'mohit');
define('DB_PASSWORD', 'mohit12345');
define('DB_HOST', 'localhost');

// Create connection
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

// Check connection
if (!$link) {
    die("Connection failed: " . mysql_error());
}
$db_selected = mysqli_select_db(DB_NAME, $link);

if (!$db_selected){
	die('can\;t use ' . DB_NAME . ':' . mysql_error());
}
echo "Connected successfully";
?>