<!DOCTYPE html>
<html>
<body>

	<?php
	echo "<h1>FileGetContents</h1>";
	echo "<pre>"; 
	echo htmlentities(file_get_contents("read.php"));
	echo "</pre>";
	echo "<h1>Implode</h1>";
	echo "<pre>"; 
	echo htmlentities(implode("",file("read.php")));
	echo "</pre>";
	 ?>