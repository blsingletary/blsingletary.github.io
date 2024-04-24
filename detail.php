<?php 
require 'db_connect.php';

// retrieve all variables
$fName = @$_GET["fName"];
$lName = @$_GET["lName"];
$ID = @$_GET['ID'];

// show all Contact & Reservation Information
$sql = "SELECT * FROM $tblname WHERE fName='$fName' AND lName='$lName';";
$sql .= "SELECT * FROM $tblname2 WHERE ID = '$ID';";
$result = mysqli_multi_query($conn, $sql);

// Handle result of the first query
if ($result) {
    $row = mysqli_fetch_assoc(mysqli_store_result($conn));
}

mysqli_close($conn);
?>

<html>
<head>
<title>Detail</title>
<link rel = "stylesheet" href = "css/styles.css">
</head>

<body>
  <h3><a href="index.html" target="_self">Home</a></h3>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote> 
    <table width="60%" border="0" cellpadding="5" cellspacing="15">
	<tr>
		<td colspan="2"><p><h2><?php echo "$fName $lName"; ?></h2></td>
	  </tr>
    <tr>
      <td width="130">Email:</td>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
      <td width="130">First Name :</td>
      <td><?php echo $row['fName']; ?></td>
    </tr>
    <tr>
      <td width="130">Middle Initial:</td>
      <td><?php echo $row['minit']; ?></td>
    </tr>
    <tr>
      <td width="130"><p>Last Name:<br />
      </p>        </td>
      <td><?php echo $row['lName']; ?></td>
    </tr>
    <tr>
      <td width="130">Phone Number:</td>
      <td><?php echo $row['phonenum']; ?></td>
    </tr>
    <tr>
      <td width="130">Payment Method:</td>
      <td><?php echo $row['pMethod']; ?></td>
    </tr>
  </table>
   </p>
</blockquote>
</body>
</html>