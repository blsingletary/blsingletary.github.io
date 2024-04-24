<?php 
require 'db_connect.php';
// retrieve all variables
$email = @$_POST["email"];
$fname = @$_POST["fname"];
$minit = @$_POST["minit"];
$lname = @$_POST["lname"];
$phonenum = @$_POST["phonenum"];
$pmethod = @$_POST["pmethod"];

// insert information to database
$sql="insert into $tblname values('$email','$fname','$minit','$lname','$phonenum','$pmethod')";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<html>
<head>
<title>Success</title>
<link rel = "stylesheet" href = "css/styles.css">
<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <h3>Information Successfully added! please proceed. </h3>
  <h3><a href="add2.html" target="_self">NEXT</a></h3>
  <body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
