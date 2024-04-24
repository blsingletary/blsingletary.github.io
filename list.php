<?php 
require 'db_connect.php';
// show all contact information
$sql="select * from $tblname order by lname";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<html>
<head>
<link rel = "stylesheet" href = "css/styles.css">
<title>List</title>
</head>

<BODY>
<h3><a href="index.html" target="_self">Home</a></h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <h3>All  Contact Information</h3>
   <?php
       if (mysqli_num_rows($result)==0){
      echo "<h4>No data<h4>"; 
    } else {
         while($row = mysqli_fetch_assoc($result)) {
        $lName = $row['lName'];
          $fName = $row['fName'];
        echo "<ul><li><h4><a href=\"detail.php?lName=$lName&fName=$fName\">$lName, $fName</a><h4></li></ul>";
      }
    }
     
  ?>
  
</blockquote>
</body>
</html>
