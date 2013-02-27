<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Home</p>

<?php $url = "http://www.parkavenuevw.ca/home.aspx?lng=3"; $arr = parse_url($url); $parameters = $arr["host"]; echo $parameters;  ?>
</body>
</html>