<?php

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

?>