 <a href='profile.php'>Back to profile page</a> | <a href="../index.php">Back to home page</a>
<br /><br />
<?php
session_start();
include '../config.php'; 

?>
<?php
$activeusename = $_SESSION['name'] ;
    $ud_ID = (int)$_POST["ID"];

    $ud_password = mysql_real_escape_string($_POST["ud_password"]);
    $ud_description = mysql_real_escape_string($_POST["ud_description"]);


    $query="UPDATE members
            SET password = '$ud_password', description = '$ud_description' 
            WHERE username='$activeusename'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>($activeusename) Record Updated<p><br>";
}else{
    echo "<p>($ud_ID) Not Updated<p>";
}
?>