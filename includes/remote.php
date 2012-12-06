<div class="remotePanel">
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
    //this selects everything for the current user, ready to be used in the script below
    $result = mysql_query("SELECT * FROM menupage where id = 2");
    
    //this function will take the above query and create an array
    while($row = mysql_fetch_array($result))
      {
            $pageid = $row['id'];
        $menuname = $row['menuName'];
        }
    
    ?>   
<?php
if($_SESSION) {
//si il y a un session existante donc si la session est ouverte
echo '<table width="300" border="0" align="center" cellpadding="5" c cellspacing="1"  style="padding:20px; border:1px solid #CCC;">
<tr>
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3">Vous etes Connecte en tant que <strong>'.$_SESSION["name"].'</strong></td>
</tr>
<tr>
<td colspan="3">Acceder a votre&nbsp;<a href="?page='.$pageid.'" title="'.$menuname.'">'.$menuname.'</a></li></td>
</tr>
<tr>
<td colspan="3" >&nbsp;</td>
</tr>
<tr>
<td width="78">&nbsp;</td>
<td width="6">&nbsp;</td>
<td width="294" align="right"><a href="includes/logout.php" >Logout</a></td>
</tr>
</table>
</td>
</tr>
</table>';

} else {
echo '	
<table width="300" border="0" align="center" cellpadding="5" c cellspacing="1"  style="padding:20px; border:1px solid #CCC;">
<tr>
<form name="form1" method="post" action="includes/checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>';	
}
?>
</div>