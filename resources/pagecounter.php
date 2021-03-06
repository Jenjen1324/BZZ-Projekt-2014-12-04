<?php

function page_counter($filename, $bak)
{
	$linecount = 50;
	try
	{
		// Read file
		$lines = file($filename);
		$newlines = array();

		$count = 0;
		$pagecount = 1;

		// Loop lines and insert page counter where needed
		foreach($lines as $line)
		{
			if($count == 0)
			{
				$newlines[] = "Seite $pagecount";
				$pagecount++;
			}

			$newlines[] = $line;

			$count++;

			if($count == $linecount)
				$count = 0;
		}

		// Write lines to new file
		$text = implode('', $newlines);
		return write($filename, $bak);

	}
	catch (Exception $ex)
	{
		return $ex;
	}
}

function write($filename, $bak, $text)
{
	try
	{
		if(file_exists($filename))
		{
			rename($filename, $bak);
		}

		$fh = fopen($filename, "w");
		fwrite($fh,$text);
		fclose($fh);
		return true;
	}
	catch (Exception $ex)
	{
		return $ex;
	}
}