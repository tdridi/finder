 <a href="edit.php">Edit your profile</a> | <a href="../index.php">Back to home page</a>
<br /><br />
<?php
session_start();
include '../config.php'; 

?>
<?php
$activeusename = $_SESSION['name'] ;

//this selects everything for the current user, ready to be used in the script below
$result = mysql_query("SELECT * FROM $tbl_name WHERE username='$activeusename' LIMIT 1");

//this function will take the above query and create an array
while($row = mysql_fetch_array($result))
  {
 	//with the array created above, I can create variables (left) with the outputted array (right)
	$description = $row['description'];

	echo "Description: ".$description;
  } 

?>


