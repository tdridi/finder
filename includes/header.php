<div class="header">
    <div class="menusHeader">
        <ul>
		<?php
		//this selects everything for the current user, ready to be used in the script below
		$result = mysql_query("SELECT * FROM menupage Where menu = 1");
		
		//this function will take the above query and create an array
		while($row = mysql_fetch_array($result))
		  {
			$pageid = $row['id'];
			$menuname = $row['menuName'];
			echo "<li><a href='?page=".$pageid."' title='".$menuname."'>".$menuname."</a></li>";
		  }
		
		?>        
        </ul>
    </div>
    <div class="searchHeader">
        <h4>Search</h4> 
        <form action="?page=6" method="get">
            <input type="text" name="query" />
            <input type="submit" value="Search" />
        </form>
    </div>
    <div class="clear"></div>
</div>