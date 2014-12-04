<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Author" content="Jens Vogler">
  <meta name="Keywords" content="IO File Output">
  <meta name="Description" content="Ausgabe Datei">
 </head>

 <body>
  <?php
	echo "<h1>Ausgabe einer Datei</h1>";
	echo "<pre>";
	$lines = file("read.php");
	foreach($lines as $line) {
		echo htmlentities($line);
	}
	echo "</pre>";
?>
 </body>
</html>
