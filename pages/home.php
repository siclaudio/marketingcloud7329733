﻿<?php
session_start("et@br");

if(!isset($_SESSION['login']) || !isset($_SESSION['password'])){
    
     header("Location: ../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ET@ Brazil</title>
<link rel="stylesheet" href="../css/style.css"/>
</head>

<body>
<div class="top">
	<img src="../images/sflogo.jpg" width="300px"/>
</div>
<div id="menu">
	<?php include "menu.menu"; ?>
</div>
<div class="content">
	<?php $panel = $_GET['option']; include $panel.".html"; ?>
</div>
</body>

</html>
