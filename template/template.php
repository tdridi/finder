<?php
session_start();
include 'config.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$siteName ?></title>
<link rel="stylesheet" href="css/site.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
<script src="libs/jquery.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="libs/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" src="libs/pretty_custom.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
/*	$(document).ready(function(){
		$("ul.gallery").prettyGallery();
	});*/
</script>
</head>
<body>
<div class="wrapper">
<div class="headerBase">
	<div class="logoSite"><img src="<?=$siteLogo ?>" width="150" /><strong><?=$siteName ?></strong></div>
	<?php include 'includes/remote.php'; ?>
	<div class="clear"></div>
</div>
<?php include 'includes/header.php'; ?>
	<div class="contentWrap">
		<?php
		/*?>$get_path = $_SERVER["REQUEST_URI"]; 
		$page_id = explode('?', $get_path); <?php */
		if(isset($_GET["page"])){
			
			$page_id = $_GET["page"];
			}else{
			$page_id=0;	
				
				}
		
		//$page_id_value = array_shift($page_id);
		//echo  $page_id;
		
		
		if (!$page_id ){
		
			include 'pages/home.php'; 
			  
		} else	{
			
		
		
			//this selects everything for the current user, ready to be used in the script below
			$result = mysql_query("SELECT * FROM menupage WHERE id='$page_id'");
			
			//this function will take the above query and create an array
			while($row = mysql_fetch_array($result))
			  {
					$page = $row['page'];
					include $page;
			  }
		
			
			}
		?>
	</div>
</div>
</body>
</html>
