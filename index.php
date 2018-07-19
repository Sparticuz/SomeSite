<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Some Site</title>
<link href="somesite.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="main"><img src="images/head.jpg" width="800" height="73" border="0" usemap="#Map">
<map name="Map">
  <area shape="rect" coords="105,56,140,70" href="?page=home" alt="home">
  <area shape="rect" coords="200,56,255,70" href="?page=aboutus" alt="about us">
  <area shape="rect" coords="320,56,380,70" href="?page=products" alt="products">
  <area shape="rect" coords="425,56,525,80" href="?page=somethingelse" alt="something else?">
  <area shape="rect" coords="570,56,620,70" href="?page=pirates" alt="pirates">
  <area shape="rect" coords="700,56,745,70" href="?page=contact" alt="contact">
</map>
<div id="content">
<?php
	$ext = '.php';
	$idx = $_GET["page"];
	$idx = isset($idx) ? $idx.$ext : 'home'.$ext;
	if(file_exists($idx))
{
	include $idx;
}
    else
{
	echo 'Could not include '.$idx.'! Something is either wrong with my code or wrong with your browser version, please upgrade to the latest version of you browser.';
}
?>
</div>
<img src="images/foot.jpg" width="800" height="26">
</div>
</body>
</html>
