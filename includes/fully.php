Fully
<ul class="gallery">
<?php
//this selects everything for the current user, ready to be used in the script below
$result = mysql_query("SELECT * FROM upload");

//this function will take the above query and create an array
while($row = mysql_fetch_array($result))
  {
 	//with the array created above, I can create variables (left) with the outputted array (right)
	$type = $row['type'];
	$name = $row['name'];
	if (($type == "image/gif")
		|| ($type == "image/jpeg")
		|| ($type == "image/png")
		|| ($type == "image/pjpeg")){
	echo "<li><a href='uploads/".$name."' rel='prettyPhoto[gallery1]' title='".$name."'><img width='150' height='150' src='uploads/".$name."' /></a></li>";
	}
  } 

?>
</ul>