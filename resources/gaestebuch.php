<?php

function entry($person, $text)
{
	$date = date('Y-m-d');
	$text = 
<<<ENTRY
Geschrieben von $person am $date

$text

ENTRY;
	
	append("gaestebuch.txt", $text);
}

function append($filename, $text)
{
	try
	{
		$fh = fopen($filename, "a");
		fwrite($fh, $text);
		fclose($fh);

		return true;
	}
	catch(Exception $ex)
	{
		return $ex;
	}
}