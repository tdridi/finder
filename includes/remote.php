<div class="closer">Getting Ready <a href="../exclusive.html">Excuted from Local Side test 350</a></div>
<div class="far">Getting finished <a href="../exclusive.html">Excuted from Local Side test 360</a></div>
<div class="far">Getting Done <a href="../exclusive.html">1920</a></div>
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
if($_SESSION) {
//si il y a un session existante donc si la session est ouverte
echo '<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Vous etes Connecte en tant que </strong></td>
</tr>
<tr>
<td colspan="3">'.$_SESSION["name"].' &nbsp; <a href="includes/profile.php">profile</a></td>
</tr>
<tr>
<td colspan="3" >&nbsp;</td>
</tr>
<tr>
<td width="78">&nbsp;</td>
<td width="6">&nbsp;</td>
<td width="294"><a href="includes/logout.php" >Logout</a></td>
</tr>
</table>
</td>
</tr>
</table>';

} else {
echo '	
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
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
<td><input name="mypassword" type="text" id="mypassword"></td>
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
