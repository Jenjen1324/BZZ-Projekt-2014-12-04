<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  <?php
	echo "<head><title>Ausgabe einer Datei</title></head>";
	echo "<body>";
	echo "<h1>Ausgabe einer Datei</h1>";
	echo "<pre>";
	$lines= file("read.php");
	foreach($lines as $line) {
		echo htmlentities($line);
		echo "</pre>";
		echo "</body>";
		echo "</html>";
	}
?>
 </body>
</html>
