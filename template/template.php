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
	$(document).ready(function(){
		$("ul.gallery").prettyGallery();
	});
</script>
</head>

<body>
<div class="wrapper">
<div class="logoSite"><img src="<?=$siteLogo ?>" width="150" /></div>
<strong>look UP</strong>
<?php include 'includes/header.php'; ?>
<?php include 'includes/remote.php'; ?>
<?php include 'includes/exclusive.php'; ?>
<?php include 'includes/fully.php'; ?>
</div>

</body>
</html>
