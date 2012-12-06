<div bgcolor="#0099CC">
Liste of article
<?php
	echo "<ul class='articleLoop'>";
    //this selects everything for the current user, ready to be used in the script below
    $result = mysql_query("SELECT * FROM article WHERE articlecategorie=20");
    
    //this function will take the above query and create an array
    while($row = mysql_fetch_array($result))
      {
            $articleTitle = $row['articleTitle'];
            $articleShort = $row['articleShort'];

			echo "<li><h4>".$articleTitle."</h4>";
			echo "<p>".$articleShort."</p></li>";
	  }
	echo "</ul>";
?>
</div>
