<?php 
require 'db_connect.php';

// retrieve all variables
$keyword = @$_POST["keyword"];
$searchin = @$_POST["searchin"];

// execute query
$sql="select * from $tblname";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<html>
<head>
<link rel = "stylesheet" href = "css/styles.css">
<h3><a href="index.html" target="_self">Home</a></h3>
<title>Results</title>
</head>

<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <h3>Result</h3>
   <?php
       $i =0;
    while($row = mysqli_fetch_assoc($result)) {
      $fName = $row['fName'];
        $lName = $row['lName'];
      
      if ($searchin == "both"){
        // search in last name & first name
        if ((preg_match("/$keyword/i",$fName))||(preg_match('/$keyword/',$lName))){
          echo "<ul><li><h4><a href=\"detail.php?lName=$lName&fName=$fName\">$lName, $fName</a><h4></li></ul>";
          $i++;
        }
      } else if($searchin == "fName"){
        // seach in first name
        if (preg_match("/$keyword/i",$fName)){
            echo "<ul><li><h4><a href=\"detail.php?lName=$lName&fName=$fName\">$lName, $fName</a><h4></li></ul>";
            $i++;
        }
      } else{
        // search in last name
        if (preg_match("/$keyword/i",$lName)){
            echo "<ul><li><h4><a href=\"detail.php?lName=$lName&fName=$fName\">$lName, $fName</a><h4></li></ul>";
            $i++;
        }        
      }
    }
    
    if ($i == 0)
      echo "<ul><h4>No match result.<h4></ul>";
     
  ?>
  
</blockquote>
</body>
</html>
