<?php



include("_mysql.php");
include("_settings.php");
include("_functions.php");

//session_destroy();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Mafiatorte" />



<title>Mafiatorte</title>
<link href="_stylesheet.css" rel="stylesheet" type="text/css" />



</head>
<body>
<div id="holder">
 <div id="top"><b>Hallo und Herzlich Willkommen im BACKEND!!!</b></div>

<!-- Schau mal ins Backend : <a href="/backend/index.php">Klick</a> -->
<div id="navi">
<?php include("main_navi.php")?></div>
	<div id="pad"><?php
	
	
	
          if(!isset($site)) $site="main";
					$invalide = array('\\','/','/\/',':','.');
					$site = str_replace($invalide,' ',$site);
					if(!file_exists($site.".php")) $site = "main";
					include($site.".php");
					?>
</div>
<?php include("basket.php")?><div id="footer"></div>
</div></div>
</body>
</html>