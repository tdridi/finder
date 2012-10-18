<?php include '../config.php'; ?>
<?php 
// Fix for removed Session functions 
function fix_session_register(){ 
    function session_register(){ 
        $args = func_get_args(); 
        foreach ($args as $key){ 
            $_SESSION[$key]=$GLOBALS[$key]; 
        } 
    } 
    function session_is_registered($key){ 
        return isset($_SESSION[$key]); 
    } 
    function session_unregister($key){ 
        unset($_SESSION[$key]); 
    } 
} 
if (!function_exists('session_register')) fix_session_register(); 
?> 
<?php


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");

session_start();
$_SESSION['name'] = $myusername;

header("location:../index.php");





}
else {
echo "Wrong Username or Password";
}


?>
