<?php 
// connect to my sql
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "Hotel_Database";	// Database name
$tblname="guest"; // Table name
$tblname2="staysat"; // Table name
// Connect to server and select databse.	
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
	// echo "Successfully Connected";
}
?>
