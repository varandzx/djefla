<?php 

session_start();


define('LOCALHOST' , 'localhost');
define('DB_NAME' , 'login_sample_db');
define('DB_PASSWORD' , '');
define('DB_USERNAME' , 'root');


$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
$db_select=mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
?>

