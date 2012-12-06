<?php
$activeusename = $_SESSION['name'] ;
$query = mysql_query("SELECT * FROM $tbl_name WHERE username='$activeusename'") or die(mysql_error());

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
        $username = $row['username'];
        $password = $row['password'];
        $description = $row['description'];

    }
?>

<form action="?page=4" method="post">
<input type="hidden" name="ID" value="<?=$UID;?>">
Password : <input type="text" name="ud_password" value="<?=$password?>"><br>
Description :<textarea type="text" name="ud_description" ><?=$description?></textarea><br>
<input type="Submit">
</form>
<?php
}else{
    echo 'No entry found. <a href="javascript:history.back()">Go back</a>';
}
?>