<?php

/******************************************************************
Fichier de config 
******************************************************************/

/*$cnx_sql=*/



$host="127.0.0.1"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="finder"; // Database name
$tbl_name="members"; // Table name
$tblsite_name="site_config";

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


//to Get name of the Site
$ResultSiteName = mysql_fetch_array(mysql_query("SELECT * FROM $tblsite_name WHERE id ='1'"));
$siteName = $ResultSiteName['site_name'];

//to Get logo of the Site
$ResultSiteLogo = mysql_fetch_array(mysql_query("SELECT * FROM $tblsite_name WHERE id ='1'"));
$siteLogo = $ResultSiteLogo['site_logo'];

//to Get menu 
$ResultSiteMenu = mysql_fetch_array(mysql_query("SELECT * FROM menupage"));
$menu = $ResultSiteMenu['id'];


//to Get menu 
$ResultSitePage = mysql_fetch_array(mysql_query("SELECT * FROM menupage WHERE id ='$menu'"));
$page = $ResultSitePage['page'];

?>