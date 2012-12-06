
<div class="profilWrap"> 

	<?php
    //this selects everything for the current user, ready to be used in the script below
    $result = mysql_query("SELECT * FROM menupage where id = 3");
    
    //this function will take the above query and create an array
    while($row = mysql_fetch_array($result))
      {
            $pageid = $row['id'];
        $menuname = $row['menuName'];
		echo "<a href='?page=".$pageid."' title='".$menuname."'>".$menuname."</a>";

        }
    
    ?>   
<br /><br />
<?php
/*session_start();
include '../config.php'; 
*/
?>
<h2><?php echo $_SESSION["name"] ;?></h2>

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
<?php
include 'upload.php'; 

?>
</div>