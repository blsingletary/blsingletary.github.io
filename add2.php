<?php 
require 'db_connect.php';
// retrieve all variables
$ID = @$_POST["ID"];
$location = @$_POST["location"];
$gRoom = @$_POST["gRoom"];
$numnightstay = @$_POST["numnightstay"];

// insert information to database
$sql="insert into $tblname2 values('$ID','$location','$gRoom','$numnightstay')";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<html>
<head>
<title>Add processed</title>
<link rel = "stylesheet" href = "css/styles.css">
<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <h3>Reservation Complete! Thank You!</h3>
  <h3><a href="index.html" target="_self">Home</a></h3>
  <body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
